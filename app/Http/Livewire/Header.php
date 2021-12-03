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
use App\Models\favorite;

class Header extends Component
{
    public $menu_arr = [];
    
    public $CartItem,$ProductVariant,$varianttag,$filter_product,$getproduct,$discoutget, $user_id, $cartCount;

    protected $listeners = ['getCart', 'DeleteCartProduct'];

    protected $rules = [
        'CartItem.*.stock' => [],
    ];
    
    public function mount() {
        $cartCount = 0;
        if (Auth::check()) {
            $this->user_id =  Auth::user()->id;
            $this->discoutget = Cart::where('user_id', $this->user_id)->first();

        }
         $this->getCart();
       $this->ProductVariant = ProductVariant::all();
       $this->varianttag = VariantTag::All();

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


    }
    public function CartItem($value='')
    {
        $this->CartItem = $value;
    }
    public function render()
    {
   
        $this->getproduct = Product::when($this->filter_product, function ($query, $filter_product) {

            $query->where('title', 'LIKE', '%' . $filter_product . '%');

            })->orderBy('title','DESC')->limit(5)->get();

        return view('livewire.header');
    }

    public function stockplusminus($cartid, $variantid = null)
    {

        if($this->CartItem)
        {

            if(Auth::check()) {

                Cart::where('id', $this->CartItem[$cartid]['id'])->update(['stock' => $this->CartItem[$cartid]['stock']]);

            } else {
                $cart = session()->get('cart');
                if(!empty($cart)) {

                    if(!empty($variantid)) {

                        if(isset($cart[$variantid]) && $cart[$variantid]['type'] == 'variant') {
                            $cart[$variantid]['stock'] = $this->CartItem[$variantid]['stock'];
                            session()->put('cart', $cart);

                        }

                    } else {

                        if(isset($cart[$cartid])  && $cart[$variantid]['type'] == 'product') {

                            $cart[$cartid]['stock'] = $this->CartItem[$cartid]['stock'];
                            session()->put('cart', $cart);

                        }

                    }
                    
                }

            }
            $this->emit('getCart');
        } 
    }

      public function dehydrate($value='')
    {
        $this->discoutget = null;
    }

    public function hydrate($value='')
    {
        if(Auth::check())
         $this->discoutget = Cart::where('user_id', Auth::user()->id)->first();
    }


    public function DeleteCartProduct($id, $variantid = null)
    {

        if (Auth::check()) {
            Cart::find($id)->delete();

        } else {
            $cart = session()->get('cart');

            if(isset($cart[$variantid]) && $cart[$variantid]['type'] == 'variant') {
                unset($cart[$variantid]);
            }

            if(isset($cart[$id]) && $cart[$id]['type'] == 'product') {
                unset($cart[$id]);
            }
             session()->put('cart', $cart);
        }
        $this->getCart();
        $this->emit('getCart');

    }


    public function getCart()
    {
        if (Auth::check()) {

            $this->CartItem =  Cart::with(['media_product', 'product_detail'])->where('user_id',Auth::user()->id)->get();
            if(!empty($this->CartItem))
             $this->cartCount = $this->CartItem->sum('stock');

        } else {
            $this->CartItem  = session()->get('cart');
                                            $stock = 0;
                                if(!empty( $this->CartItem)) {

                                    foreach ($this->CartItem as $item) {
                                        $stock += $item['stock'];
                                    }
                                }
                                 $this->cartCount = $stock;
        }
        

        $this->dispatchBrowserEvent('onCartChanged');




    }

      public function UpdateWish($value, $product_id) {

        if(!Auth::check()) {

             session()->flash('alert', 'You need to login');

        } else {
           
            if(!$value) {

                $favorite = favorite($product_id);
               
                $fav = favorite::findOrFail($favorite->id);
                $fav->delete();
                session()->flash('message', 'Item removed from WishList !!');

            } else {

                 $favorite_arr = [
                        
                    'product_id' => $product_id,

                    'user_id' => Auth::user()->id,

                    'status' => 1,
                    
                    ];

                favorite::create($favorite_arr);
                session()->flash('message', 'Item added in Wishlist');

            }

            $this->getCart();
            $this->emit('getProduct');
            $this->emit('getCart');
            $this->emit('getProducts');

        }
       
    }

   

}
