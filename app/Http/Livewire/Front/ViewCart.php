<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Cart;
use App\Models\VariantTag;
use App\Models\Menu;
use App\Models\ProductVariant;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\favorite;

class ViewCart extends Component
{
	public $CartItem,$ProductVariant,$varianttag,$stockitem;

	protected $listeners = ['getCart', 'DeleteCartProduct'];


	public function mount() {
        if (Auth::check()) {
            $this->user_id =  Auth::user()->id;
            $this->getCart();
        }

       $this->ProductVariant = ProductVariant::get();
       $this->varianttag = VariantTag::All();
    }

    protected $rules = [

        'CartItem.*.stock' => [],

    ];

    public function render()
    {
        return view('livewire.front.view-cart');
    }

    public function DeleteCartProduct($id)
    {
        if (Auth::check()) {
            Cart::find($id)->delete();
            $this->getCart();

            $this->ProductVariant = ProductVariant::get();
            $this->varianttag = VariantTag::All();
        }
    }


    public function stockplusminus($cartid)
    {

    	if($this->CartItem)
        {
            foreach ($this->CartItem as $stock) {
                Cart::where('id', $stock->id)->update(['stock' => $stock->stock]);
            }
             
        } 
    }
    
    public function UpdateWish($id,$productid){

    	if (Auth::check()) {
    		$this->user_id =  Auth::user()->id;
	        if($id == 0){
	                $favorite_arr = [
	                        
	                        'product_id' => $productid,

	                        'user_id' => $this->user_id,

	                        'status' => '1',
	                    ];

	                favorite::create($favorite_arr);

	            
	        }else{

	            $favorite  = favorite::where('id',$id)->delete();

	            }
	    }
    }

    public function getCart()
    {
        if (Auth::check()) {
        	$this->user_id =  Auth::user()->id;
            $this->CartItem =  Cart::with(['media_product', 'product_detail'])->where('user_id',$this->user_id)->get();
        }
    }
}
