<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

use App\Models\Product;

use Illuminate\Support\Facades\Auth;

use App\Models\ProductMedia;

use App\Models\ProductVariant;

use App\Models\Tag;

use App\Models\VariantStock;

use App\Models\VariantTag;

use App\Models\Cart;

use App\Models\Location;

use Illuminate\Http\Request;

class ProductFrontDetail extends Component
{
    public $product,$Productmedia,$Productvariant,$tags,$Productmediafirst,$Productvariantsize,$varianttag,$fetchprice,$CartItem,$fetchstock;

    public function render()
    {
        return view('livewire.front.product-front-detail');
    }

    public function mount($slug) {

       $user_id =  Auth::user()->id; 
       $this->product = Product::where('seo_utl',$slug)->first();
       $this->varianttag = VariantTag::All();
       $this->Productvariantsize = ProductVariant::select('varient1','varient2','varient3','varient4','varient5','varient6','varient7','varient8','varient9','varient10')->where('product_id',$this->product['id'])->distinct()->get();
       $this->Productmediafirst = ProductMedia::where('product_id',$this->product['id'])->first();
       $this->Productmedia = ProductMedia::where('product_id',$this->product['id'])->get();
       $this->Productvariant = ProductVariant::where('product_id',$this->product['id'])->get();
       $this->tags = Tag::All();
       $this->CartItem = Cart::with('media_product')->with('product_detail')->where('user_id',$user_id)->get();

    }

    public function fetchPrice(Request $Request)
    {

        $this->fetchprice = ProductVariant::where('attribute1',$Request->text1)->Where('attribute2',$Request->text2)->Where('attribute3',$Request->text3)->first();

        $this->fetchstock = VariantStock::where('variant_main_id',$this->fetchprice['id'])->Where('location_id',1)->first();

         return response()->json(array('fetchprice' => $this->fetchprice,'fetchstock' => $this->fetchstock));

    }

    public function addCart(Request $Request)
    {


        $user_id =  Auth::user()->id;

        if($Request['stock'] == "")
        {
            $stock = 1;
        }
        else
        {
            $stock = $Request['stock'];
        }

        $cart_arr = [
                    
                    'product_id' => $Request['productid'],

                    'user_id' => $user_id,

                    'varientid' => $Request['varientid'],

                    'price' => $Request['getpriceinput'],

                    'stock' => $stock,

                    'locationid' => '1'

                ];

        $user = Cart::create($cart_arr);

        $user_id =  Auth::user()->id; 

        $this->varianttag = VariantTag::All();

        $this->CartItem = Cart::with('media_product')->with('product_detail')->where('user_id',$user_id)->get();

        $this->Productvariant = ProductVariant::where('product_id',$this->product['id'])->get();


    }
}
