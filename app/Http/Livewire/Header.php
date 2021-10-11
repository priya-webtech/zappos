<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\VariantTag;
use App\Models\Menu;
use App\Models\ProductVariant;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Header extends Component
{
    public $menu_arr = [];
    
    public $CartItem,$ProductVariant,$varianttag,$filter_product,$getproduct;

    public function mount() {
        if (Auth::check()) {
            $user_id =  Auth::user()->id;
            $this->CartItem = Cart::with('media_product')->with('product_detail')->where('user_id',$user_id)->get();
        }

       $this->ProductVariant = ProductVariant::get();
       $this->varianttag = VariantTag::All();


    }
    public function render()
    {
        $this->getproduct = Product::when($this->filter_product, function ($query, $filter_product) {

            $query->where('title', 'LIKE', '%' . $filter_product . '%');

            })->orderBy('title','DESC')->limit(5)->get();

        $menus = Menu::where('name','Main Menu')->with('items')->first();

        if(count($menus->items) > 0) {

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
        return view('livewire.header');
    }

    public function DeleteCartProduct($flag)
    {
        $res=Cart::find($flag)->delete();

        $user_id =  Auth::user()->id;

        $this->CartItem = Cart::with('media_product')->with('product_detail')->where('user_id',$user_id)->get();
        $this->ProductVariant = ProductVariant::get();
       $this->varianttag = VariantTag::All();
    }
}
