<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Cart;
use App\Models\VariantTag;
use App\Models\Menu;
use App\Models\ProductVariant;
use App\Models\Product;
use App\Models\discount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\favorite;

class ViewCart extends Component
{
	public $CartItem,$ProductVariant,$varianttag,$stockitem,$promotioncode,$discoutget;

	protected $listeners = ['getCart', 'DeleteCartProduct'];


	public function mount() {
        
        if (Auth::check()) {
            $this->user_id =  Auth::user()->id;
            $this->discoutget = Cart::with('promocode')->where('user_id', $this->user_id)->first();
        }
        $this->getCart();

       $this->ProductVariant = ProductVariant::all();
       $this->varianttag = VariantTag::All();
    }

    protected $rules = [

        'CartItem.*.stock' => [],

    ];

    public function render()
    {
        return view('livewire.front.view-cart');
    }

    public function DeleteCartProduct($id, $variantid = null)
    {

        if (Auth::check()) {
            Cart::find($id)->delete();
            // return redirect(request()->header('Referer'));

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

    public function dehydrate($value='')
    {
        $this->discoutget = null;
    }

    public function hydrate($value='')
    {
        if(Auth::check())
          $this->discoutget = Cart::with('promocode')->where('user_id', Auth::user()->id)->first();
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
             
        } 
        $this->emit('getCart');

    }

    public function PromotionalCode()
    {
        if (Auth::check()) {
            $this->user_id =  Auth::user()->id;
            $checkdiscount =  discount::where('code',$this->promotioncode)->first();
            if($checkdiscount){
               Cart::where('user_id',$this->user_id)->update([
                'discount_id' => $checkdiscount->id,
               ]);
            }else{
               session()->flash('message', 'Promotional Code Wrong!!!');
            }

        } else {
            session()->flash('alert', 'You need to login');
        }
    }
    public function getCart()
    {

         if (Auth::check()) {

            $this->CartItem =  Cart::with(['media_product', 'product_detail'])->where('user_id',Auth::user()->id)->get()->toArray();

        } else {
            $this->CartItem  = session()->get('cart');
        }

    }

    public function checkout()
    {
        if(!Auth::check()) {
            session()->flash('alert', 'You need to login');
        } 
    }

    public function UpdateWish($value, $product_id) {

        if(!Auth::check()) {

             session()->flash('alert', 'You need to login');

        } else {
           
            if(!$value) {

                $favorite = favorite($product_id);
               
                favorite::where('id',$favorite->id)->delete();
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
              $this->emit('getCart');



        }
       
    }
}
