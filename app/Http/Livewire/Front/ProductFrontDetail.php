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

    public $Productmedia,$tags,$Productmediafirst,$Productmediass,$varianttag,$slug,$fetchprice,$CartItem,$fetchstock,$Collection,$productrelated,$productid,$varientid,$getpriceinput,$stock, $user_id, $variant_id;

    

    protected $product, $Productvariant;

    protected $rules = [

        'productid' => '',
        'varientid' => '',
        'getpriceinput' => '',
        'stock' => '',

    ];

    public function mount($slug) {
        $this->slug = $slug;
       
        $shopping_cart = [];
        $this->getProduct();
        $this->getCart();

        $this->productrelated = Product::All();
        $this->Collection = Collection::All();
        $this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
        $this->Productmediafirst = ProductMedia::where('product_id',$this->product['id'])->first();
        $this->Productmedia = ProductMedia::where('product_id',$this->product['id'])->get();
        $this->tags = Tag::All();
     

        $shopping_cart = json_decode(Cookie::get('shopping_cart'));
        $shopping_cart[] = $this->product['id'];
        $minutes = 60;
        Cookie::queue(Cookie::make('shopping_cart',  json_encode($shopping_cart), $minutes));
    }

    public function render()
    {
        $this->getProduct();
        return view('livewire.front.product-front-detail', ['product' =>$this->product ]);
    }

    public function getProduct() {
       $product  = Product::with('variants')->where('seo_utl',$this->slug)->first();
       $this->varianttag = VariantTag::all()->pluck('name','id');

       $product->variants->each(function($item, $key) {
            $item->varient1 = (!empty($item->varient1)) ? $this->varianttag[$item->varient1] : '';
            $item->varient2 = (!empty($item->varient2)) ? $this->varianttag[$item->varient2] : '';
            $item->varient3 = (!empty($item->varient3)) ? $this->varianttag[$item->varient3] : '';
        });
       $this->product = $product;
    }

    public function getCart() {
     $this->CartItem = Cart::with(['media_product', 'product_detail'])->where('user_id',$this->user_id)->get();
    }

    public function fetchPrice(Request $request)
    {

        $this->Productvariant = ProductVariant::with(['variant_stock' => function($q) {
            $q->where('location_id', 1);
        }])->where('attribute1',$request->text1)->where('attribute2',$request->text2)->where('attribute3',$request->text3)->first();


         return response()->json(array('variant' => $this->Productvariant));

    }


    public function addCart()
    {

       dd('hello');
        $varientid =0;

        
        $variant = ProductVariant::where('id',$varientid)->first();

        if(!empty($variant)) {
            $cart_arr = [
                    
                    'product_id' => $variant->product_id,

                    'user_id' => $this->user_id,

                    'varientid' => $variant->id,

                    'price' => $variant->price,

                    'stock' => $variant->variant_stock[0]->stock,

                    'locationid' => '1'

                ];

            Cart::create($cart_arr);
        }

        $this->getCart();

    }


}
