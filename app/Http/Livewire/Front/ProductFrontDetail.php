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


    public $Productmedia,$tags,$Productmediass,$varianttag,$slug,$CartItem,$fetchstock,$Collection,$productrelated,$productid,$varientid,$getpriceinput,$stock, $user_id, $Productvariant, $variationID, $reviewget,$stockitem;



    public $product, $Productvarian, $favoritevalue,$favoritevalueget;

    public $variant1, $variant2, $variant3;

    protected $rules = [

        'productid' => '',
        'varientid' => '',
        'getpriceinput' => '',
        'stock' => '',
        'stockitem' => '',

    ];

    

  

    public function mount($slug) {
        $this->slug = $slug;

        $this->user_id = Auth::user()->id;
        $this->varianttag = VariantTag::all()->groupBy('id')->toArray();
       
        $shopping_cart = [];

        $this->getProduct();
       

        $this->getCart();

        $this->productrelated = Product::with('productmediaget')->with('favoriteget')->get();

        $this->Collection = Collection::All();

        $this->Productmedia = ProductMedia::where('product_id',$this->product->id)->get();

        $this->tags = Tag::All();
        
        $this->favoritevalue  = favorite::where('user_id',$this->user_id)->where('product_id',$this->product->id)->first();

        $shopping_cart = json_decode(Cookie::get('shopping_cart'));

        $shopping_cart[] = $this->product->id;
        $shopping_cart1 = (array_unique($shopping_cart));
        $minutes = 60;
        Cookie::queue(Cookie::make('shopping_cart',  json_encode($shopping_cart1), $minutes));
    }

    public function render()
    {
        $this->dispatchBrowserEvent('onContentChanged');
        $this->user_id = Auth::user()->id;

        $this->getProduct();
       

        return view('livewire.front.product-front-detail', ['product' => $this->product]);
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

        $productvariants = ProductVariant::with(['variant_stock' => function($q) {
            $q->where('location_id', 1);
        }])->get();


        // if(!empty($productvariants) && count($productvariants) > 0) {
        

        //     foreach ($productvariants as $variant) {
        //         if($variant->attribute1 == $request->text1) {
        //             if(empty($productvariant )) $productvariant = $variant;
                    
        //             if($variant->attribute2 == $request->text2) {
        //                  if(empty($productvariant )) $productvariant = $variant;
        //                 if($variant->attribute3 == $request->text3) {
        //                     $productvariant = $variant;
        //                     break;
        //                 }                       
        //             }
        //         }
        //     }
                    

        //              if(empty($productvariant)) { $productvariant = $productvariants[0];}
        //              $this->Productvariant = $productvariant;

        // }
         
                   


        if(!empty($productvariants) && count($productvariants) > 0) {
           
        

            foreach ($productvariants as $variant) {
                if(($variant->attribute1 == $request->text1) && ($variant->attribute2 == $request->text2) && ($variant->attribute3 == $request->text3)) {
                    $productvariant = $variant;
                    break;     
                }
            }
            if(empty($productvariant)) {


            foreach ($productvariants as $variant) {
                if($variant->attribute1 == $request->text1 && $variant->attribute2 == $request->text2) {
                    $productvariant = $variant;
                    break;     
                }else if($variant->attribute1 == $request->text1 && $variant->attribute3 == $request->text3) {
                    $productvariant = $variant;
                    break;     
                }else if($variant->attribute2 == $request->text2 && $variant->attribute3 == $request->text3) {
                    $productvariant = $variant;
                    break;     
                }
            }
        }
         if(empty($productvariant)) {
            foreach ($productvariants as $variant) {
                if(($variant->attribute1 == $request->text1) || ($variant->attribute2 == $request->text2) || ($variant->attribute3 == $request->text3)) {
                    $productvariant = $variant;
                    break;     
                }
            }
        }
        if(empty($productvariant)) { $productvariant = $productvariants[0];}
                    $this->Productvariant = $productvariant;

        }


        // dump($this->Productvariant->id);
        // $this->Productvariant = Productvariant::with(['variant_stock' => function($q) {
        //     $q->where('location_id', 1);
        // }])->when($this->variant1, function($q1) {
        //     return $q1->where('attribute1',$this->variant1);

        // })->when($this->variant2, function($q1) {
        //     return $q1->where('attribute2',$this->variant2);

        // })->when($this->variant3, function($q1) {
        //     return $q1->where('attribute3',$this->variant3);

        // })->where('product_id', $this->product->id)->first();
        $this->variationID = $this->Productvariant->id;
        $price = number_format($this->Productvariant->price,2,'.',',');
         return response()->json(array('variant' => $this->Productvariant, 'price' => $price));

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
            $favorite_arr = favorite::where('id', $favorite->id)->update(['status'  => '1']);
            }else{
               $favorite_arr = favorite::where('id', $favorite->id)->update(['status'  => '0']); 
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

            session()->flash('message', 'Add WishList !!');
        }else{
            
            $favorite  = favorite::where('id',$id)->delete();
            session()->flash('message', 'Remove WishList !!');
            }
    }

    public function addCart($variationID)
    {   
        $variant = ProductVariant::find($variationID);

        if(!empty($variant)) {

            if($variant->selling_price){
                $price = $variant['selling_price'];
            }else{
                $price = $variant['price'];
            }



            $cart_arr = [
                    
                    'product_id' => $variant->product_id,

                    'user_id' => $this->user_id,

                    'varientid' => $variant->id,

                    'price' => $price,

                    //'stock' => $variant->variant_stock[0]->stock,
                    'stock' => '1',

                    'locationid' => '1'

                ];

            Cart::create($cart_arr);


        }
        else
        {

            if($this->product->compare_selling_price){
               $price = $this->product['compare_selling_price'];
            }else{
               $price = $this->product['price'];
            }
            $cart_arr = [
                    
                    'product_id' => $this->product->id,

                    'user_id' => $this->user_id,

                    'price' => $price,

                    'stock' => '1',

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
