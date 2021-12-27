<?php



namespace App\Http\Livewire;



use App\Models\Menu;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;



class Navigation extends Component

{

    public $menu_arr = [];

    public function render()

    {

        $menus = Menu::where('name','Main Menu')->with('items')->first();

        if(!empty($menus) && count($menus->items) > 0) {

            $menuitems = $menus->items->sortBy('sort');

            $i = -1;

        

            foreach ($menuitems as $menu) {

                if ($menu->depth == 0) {

                    $i++;



                    $this->menu_arr[$i]['id'] = $menu->id;

                    $this->menu_arr[$i]['name'] = $menu->label;

                    $this->menu_arr[$i]['items'] = [];

                    $this->menu_arr[$i]['images'] = [];

                }elseif (!empty($menu->image)) {

                    $this->menu_arr[$i]['images'][$menu->id] = $menu->toArray();



                } elseif ($menu->depth == 1) {

                    $this->menu_arr[$i]['items'][$menu->id] = $menu->toArray();

                    $this->menu_arr[$i]['items'][$menu->id]['items'] = [];



                } elseif ($menu->depth == 2) {

                    $this->menu_arr[$i]['items'][$menu->parent]['items'][] = $menu->toArray();

                }

            }

        }



        return view('livewire.navigation');

    }



    // public function temp() {

      /*  $menus = Menu::where('name','Main Menu')->with('items')->first();

        if(count($menus->items) > 0) {



            $menuitems = $menus->items;

            $i = 0;

            foreach ($menuitems as $menu) {

                $this->menu_arr[$i]['id'] = $menu->id;

                $this->menu_arr[$i]['name'] = $menu->name;

                $this->menu_arr[$i]['items'] = [];

                $this->menu_arr[$i]['images'] = [];

                if (count($menu->items) > 0) {



                }

                foreach ($menu->items->sortBy('sort') as $item) {

                    if (!empty($item->image)) {

                        $this->menu_arr[$i]['images'][$item->id] = $item->toArray();



                    } elseif ($item->depth == 0 && $item->image == '') {

                        $this->menu_arr[$i]['items'][$item->id] = $item->toArray();



                    } elseif ($item->depth == 1 && $item->image == '') {

                        $this->menu_arr[$i]['items'][$item->parent]['items'][] = $item->toArray();

                    }

                }

                $i++;

            }

        }*/



    // }

}

