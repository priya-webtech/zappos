<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

use App\Models\Product;

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
    public $product,$Productmedia,$Productvariant,$tags,$Productmediafirst,$Productvariantsize,$varianttag,$fetchprice,$fetchstock;

    public function render()
    {
        return view('livewire.front.product-front-detail');
    }

    public function mount($slug) {

       $this->product = Product::where('seo_utl',$slug)->first();
       $this->varianttag = VariantTag::All();
       $this->Productvariantsize = ProductVariant::select('varient1','varient2','varient3','varient4','varient5','varient6','varient7','varient8','varient9','varient10')->where('product_id',$this->product['id'])->distinct()->get();
       $this->Productmediafirst = ProductMedia::where('product_id',$this->product['id'])->first();
       $this->Productmedia = ProductMedia::where('product_id',$this->product['id'])->get();
       $this->Productvariant = ProductVariant::where('product_id',$this->product['id'])->get();
       $this->tags = Tag::All();

    }

    public function fetchPrice(Request $Request)
    {

        $this->fetchprice = ProductVariant::where('attribute1',$Request->text1)->Where('attribute2',$Request->text2)->Where('attribute3',$Request->text3)->first();

        $this->fetchstock = VariantStock::where('variant_main_id',$this->fetchprice['id'])->Where('location_id',1)->first();

         return response()->json(array('fetchprice' => $this->fetchprice,'fetchstock' => $this->fetchstock));

    }

    public function addCart(Request $Request)
    {
        $cart_arr = [
                    
                    'product_id' => $Request['productid'],

                    'user_id' => $Request['user_id'],

                    'varientid' => $Request['varientid'],

                    'price' => $Request['getpriceinput'],

                    'stock' => $Request['stock'],

                    'locationid' => '1'

                ];

        $user = Cart::create($cart_arr);

       return redirect()->back();

    }
}
