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

use App\Models\review;

use App\Models\Location;

use App\Models\favorite;

use App\Models\Collection;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class ProductFrontDetail extends Component
{

    protected $keyType = 'string';
    public $incrementing = false;

    public $Productmedia,$tags,$Productmediass,$varianttag,$slug,$fetchprice,$CartItem,$fetchstock,$Collection,$productrelated,$productid,$varientid,$getpriceinput,$stock, $user_id, $Productvariant, $variationID, $reviewget;


    public $product, $Productvarian, $favoritevalue,$favoritevalueget;

    public $variant1, $variant2, $variant3;

    protected $rules = [

        'productid' => '',
        'varientid' => '',
        'getpriceinput' => '',
        'stock' => '',

    ];

    

  

    public function mount($slug) {
        $this->slug = $slug;

        $this->user_id = Auth::user()->id;
        $this->varianttag = VariantTag::all()->groupBy('id')->toArray();
       
        $shopping_cart = [];

        $product_id = $this->getProduct();
       

        $this->getCart();

        $this->productrelated = Product::with('productmediaget')->with('favoriteget')->get();

        $this->Collection = Collection::All();
        //$this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();

        // $this->Productmediafirst = ProductMedia::where('product_id',$this->product['id'])->first();
        $this->Productmedia = ProductMedia::where('product_id',$product_id->id)->get();

        $this->tags = Tag::All();
        
        $this->favoritevalue  = favorite::where('user_id',$this->user_id)->where('product_id',$this->product->id)->first();

        $shopping_cart = json_decode(Cookie::get('shopping_cart'));

        $shopping_cart[] = $product_id;

        $minutes = 60;
        Cookie::queue(Cookie::make('shopping_cart',  json_encode($shopping_cart), $minutes));
    }

    public function render()
    {
        $this->user_id = Auth::user()->id;

        $product = $this->getProduct();
        // dd($product->variants);
       

        return view('livewire.front.product-front-detail', ['product' => $product]);
    }

    public function getProduct() {

       $this->user_id =  Auth::user()->id;
        $this->product  = Product::with('variants')->where('seo_utl',$this->slug)->first();

       $this->favoritevalue  = favorite::where('user_id',$this->user_id)->where('product_id',$this->product->id)->first();

       $this->reviewget = review::where('product_id',$this->product['id'])->get();
       return Product::with('variants')->where('seo_utl',$this->slug)->first();
    }

    public function getCart() {
     $this->CartItem = Cart::with(['media_product', 'product_detail'])->where('user_id',Auth::user()->id)->get();
        $this->emit('getCart');

    }

    public function fetchPrice(Request $request)
    {
        $this->Productvariant = ProductVariant::with(['variant_stock' => function($q) {
            $q->where('location_id', 1);
        }])->where('attribute1',$request->text1)->where('attribute2',$request->text2)->where('attribute3',$request->text3)->first();

        // $this->Productvariant = ProductVariant::with(['variant_stock' => function($q) {
        //     $q->where('location_id', 1);
        // }])->when($this->variant1, function($q1) {
        //     return $q1->where('attribute1',$this->variant1);

        // })->when($this->variant2, function($q1) {
        //     return $q1->where('attribute2',$this->variant2);

        // })->when($this->variant3, function($q1) {
        //     return $q1->where('attribute3',$this->variant3);

        // })->where('product_id', $this->product->id)->first();
        $this->variationID = $this->Productvariant->id;
         return response()->json(array('variant' => $this->Productvariant));

    }


    public function addFavorite()
    {
        $favorite  = favorite::where('user_id',$this->user_id)->where('product_id',$this->product->id)->first();

        if(!$favorite){
            $favorite_arr = [
                    
                    'product_id' => $this->product->id,

                    'user_id' => $this->user_id,

                    'status' => '1',
                ];

            favorite::create($favorite_arr);

        }else{

            if($favorite->status == 0){
            $favorite_arr = favorite::where('id', $favorite['id'])->update(['status'  => '1']);
            }else{
               $favorite_arr = favorite::where('id', $favorite['id'])->update(['status'  => '0']); 
            }

        }

    }

    public function UpdateWish($id,$productid){

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

    public function addCart($variationID)
    {

        $variant = ProductVariant::find($variationID);

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

    public function UpdateReview($id)
    {
        return view('livewire.front.product-reviews');
    }


}
