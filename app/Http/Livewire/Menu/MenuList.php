<?php



namespace App\Http\Livewire\Menu;



use App\Models\Menu;

use Livewire\Component;



class MenuList extends Menus

{



    public $menulist;

    public function render()

    {

        $this->menulist = Menu::with(['items'=>function ($q) {

            $q->where('depth', 0);

        }])->get();

        return view('livewire.menu.menu-list');

    }



}

