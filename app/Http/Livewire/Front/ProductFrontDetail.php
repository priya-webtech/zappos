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

use App\Models\Collection;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class ProductFrontDetail extends Component
{
    public $product,$Productmedia,$Productvariant,$tags,$Productmediafirst,$Productmediass,$Productvariantsize,$varianttag,$fetchprice,$CartItem,$fetchstock,$Collection,$productrelated,$productid,$varientid,$getpriceinput,$stock;

    protected $rules = [

        'productid' => '',
        'varientid' => '',
        'getpriceinput' => '',
        'stock' => '',

    ];
    public function render()
    {
        return view('livewire.front.product-front-detail');
    }

    public function mount($slug) {

       $user_id =  Auth::user()->id; 
       $shopping_cart = [];
       $this->product = Product::where('seo_utl',$slug)->first();
       $this->varianttag = VariantTag::All();
       $this->productrelated = Product::All();
       $this->Collection = Collection::All();
       $this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
       $this->Productvariantsize = ProductVariant::select('varient1','varient2','varient3','varient4','varient5','varient6','varient7','varient8','varient9','varient10')->where('product_id',$this->product['id'])->distinct()->get();
       $this->Productmediafirst = ProductMedia::where('product_id',$this->product['id'])->first();
       $this->Productmedia = ProductMedia::where('product_id',$this->product['id'])->get();
       $this->Productvariant = ProductVariant::where('product_id',$this->product['id'])->get();
       $this->tags = Tag::All();
       $this->CartItem = Cart::with('media_product')->with('product_detail')->where('user_id',$user_id)->get();

        $shopping_cart = json_decode(Cookie::get('shopping_cart'));
        $shopping_cart[] = $this->product['id'];
        //array_push($shopping_cart,$this->product['id']);
        $minutes = 60;
   
           Cookie::queue(Cookie::make('shopping_cart',  json_encode($shopping_cart), $minutes));
        
    }

    public function fetchPrice(Request $Request)
    {

        $this->fetchprice = ProductVariant::where('attribute1',$Request->text1)->Where('attribute2',$Request->text2)->Where('attribute3',$Request->text3)->first();

        $this->fetchstock = VariantStock::where('variant_main_id',$this->fetchprice['id'])->Where('location_id',1)->first();

         return response()->json(array('fetchprice' => $this->fetchprice,'fetchstock' => $this->fetchstock));

    }

    public function addCart()
    {

        dd($this->varientid);

        $user_id =  Auth::user()->id;

        if($this->stock == "")
        {
            $stock = 1;
        }
        else
        {
            $stock = $this->stock;
        }

        $cart_arr = [
                    
                    'product_id' => $this->productid,

                    'user_id' => $user_id,

                    'varientid' => $this->varientid,

                    'price' => $this->getpriceinput,

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
