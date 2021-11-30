<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

use App\Models\Product;

use Illuminate\Support\Facades\Auth;

use App\Models\ProductMedia;

use App\Models\ProductVariant;

use App\Models\Tag;

use App\Models\VariantTag;

use App\Models\Cart;

use App\Models\review;

use App\Models\favorite;

use App\Models\Collection;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class ProductFrontDetail extends Component
{

    protected $keyType = 'string';
    public $incrementing = false;

    protected $listeners = ['getProduct'];



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

        $this->iteration = 1;
        // dump('mount');
        $this->variationID = null;
        $this->slug = $slug;

        $this->varianttag = VariantTag::all()->groupBy('id')->toArray();
       
        $shopping_cart = [];

        $this->getProduct();

        $this->productrelated = Product::with('productmediaget')->with('favoriteget')->get();

        $this->Collection = Collection::All();

        if(Auth::check()) {
            $this->user_id = Auth::user()->id;
            $this->favoritevalue  = favorite::where('user_id',$this->user_id)->where('product_id',$this->product->id)->first();
            $this->favoritevalue  = favorite::where('user_id',$this->user_id)->where('product_id',$this->product->id)->first();
            $this->getCart();
        }

        $this->Productmedia = ProductMedia::where('product_id',$this->product->id)->get();

        $this->tags = Tag::All();
            

        $shopping_cart = json_decode(Cookie::get('shopping_cart'));

        $shopping_cart[] = $this->product->id;
        $shopping_cart1 = (array_unique($shopping_cart));
        $minutes = 60;
        Cookie::queue(Cookie::make('shopping_cart',  json_encode($shopping_cart1), $minutes));

    }

    public function render()
    {
        // dump('render');
        $this->dispatchBrowserEvent('onContentChanged');
        if(Auth::check()) {
            $this->user_id = Auth::user()->id;
        }
        

       

        return view('livewire.front.product-front-detail');
    }
       public function dehydrate()
    {
        // dump('dehydrate');
        $this->product = null;
        $this->favoritevalue  = null;

    }

    public function hydrate()
    {
        // dump('hydrate');
        $this->favoritevalue  = null;
        $this->getProduct();
        // $this->productrelated = Product::with('productmediaget')->with('favoriteget')->get();


    }

    public function getProduct() {

        // dump('getProduct');

        $this->product  = Product::with('variants')->where('seo_utl',$this->slug)->first();

        if(Auth::check()) {
            $this->favoritevalue  = favorite::where('user_id',Auth::user()->id)->where('product_id',$this->product->id)->first();
        }     

        $this->reviewget = review::where('product_id',$this->product->id)->get();
        $this->productrelated = Product::with('productmediaget')->with('favoriteget')->get();
        $this->iteration++;




        return Product::with('variants')->where('seo_utl',$this->slug)->first();

    }

    public function getCart() {
        
        if(Auth::check()) {
            $this->CartItem = Cart::with(['media_product', 'product_detail'])->where('user_id',Auth::user()->id)->get()->toArray();
        } else {
            $this->CartItem = session()->get('cart');
        }

        $this->emit('getCart');

    }

    public function fetchPrice(Request $request)
    {

        $productvariants = ProductVariant::with(['variant_stock' => function($q) {
            $q->where('location_id', 1);
        }])->get();


        /*if(!empty($productvariants) && count($productvariants) > 0) {
        

            foreach ($productvariants as $variant) {
                if($variant->attribute1 == $request->text1) {
                    if(empty($productvariant )) $productvariant = $variant;
                    
                    if($variant->attribute2 == $request->text2) {
                         if(empty($productvariant )) $productvariant = $variant;
                        if($variant->attribute3 == $request->text3) {
                            $productvariant = $variant;
                            break;
                        }                       
                    }
                }
            }
                    

                     if(empty($productvariant)) { $productvariant = $productvariants[0];}
                     $this->Productvariant = $productvariant;

        }*/
         
                   


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


        /*dump($this->Productvariant->id);
            $this->Productvariant = Productvariant::with(['variant_stock' => function($q) {
                $q->where('location_id', 1);
            }])->when($this->variant1, function($q1) {
                return $q1->where('attribute1',$this->variant1);

            })->when($this->variant2, function($q1) {
                return $q1->where('attribute2',$this->variant2);

            })->when($this->variant3, function($q1) {
                return $q1->where('attribute3',$this->variant3);

            })->where('product_id', $this->product->id)->first();*/
        $this->variationID = $this->Productvariant->id;
        $price = number_format($this->Productvariant->price,2,'.',',');
        $this->refresh();
         return response()->json(array('variant' => $this->Productvariant, 'price' => $price));

    }


    public function addFavorite()
    {
        
        if(!Auth::check()) {
                   session()->flash('message', 'Post successfully updated.');

        } else {


            $favorite  = favorite::where('user_id',Auth::user()->id)->where('product_id',$this->product->id)->first();

            if(!$favorite){

                $favorite_arr = [
                        
                        'product_id' => $this->product->id,

                        'user_id' => Auth::user()->id,

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

            $this->getProduct();
            $this->emit('getCart');

        }
       
    }

    public function refresh()
    {
        return;
    }

    public function UpdateReview($id)
    {
        if(!Auth::check()) {
            session()->flash('alert', 'You need to login');
        } else {

        return view('livewire.front.product-reviews');
    }
    }


    public function addCart($variationID)
    {

        $variant = ProductVariant::find($variationID);
        $product_detail = Product::find($this->product->id)->toArray();
        $media_product = ProductMedia::where('product_id', $this->product->id)->get()->toArray();

        if(!empty($variant)) {

            if($variant->selling_price) {
                $price = $variant['selling_price'];
            } else {
                $price = $variant['price'];
            }

            if(Auth::check()) {

                $exist = Cart::where('product_id', $variant->product_id)->where('varientid', $variant->id)->where('user_id', Auth::user()->id)->first();

                if(empty($exist)) {


                    $cart_arr = [
                        
                        'product_id' => $variant->product_id,

                        'user_id' => Auth::user()->id,

                        'varientid' => $variant->id,

                        'price' => $price,

                        'stock' => 1,

                        'locationid' => 1

                    ];

                    Cart::create($cart_arr);
                     $this->getCart();

                } else {
                    Cart::where('id', $exist->id)->update(['stock' => $exist->stock + 1]);
                     $this->getCart();
                }

            } else {
                $cart = session()->get('cart');

                // if cart is empty then this the first product
                if(empty($cart)) {

                    $cart = [
                            $variationID => [

                                'type' => 'variant',

                                'product_id' => $this->product->id,

                                'varientid' => $variant->id,

                                'price' => $price,

                                'stock' => 1,

                                'locationid' => 1,

                                'product_detail' => $product_detail,

                                'media_product' => $media_product
                            ]
                    ];

                    session()->put('cart', $cart);
                     $this->getCart();

                } else if(isset($cart[$variationID]) && $cart[$variationID]['type'] == 'variant') {

                    $cart[$variationID]['stock']++;

                    session()->put('cart', $cart);
                     $this->getCart();



                } else {
                     $cart[$variationID] = [

                                        'type' => 'variant',

                                        'product_id' => $this->product->id,

                                        'varientid' => $variant->id,

                                        'price' => $price,

                                        'stock' => 1,

                                        'locationid' => 1,

                                        'product_detail' => $product_detail,

                                        'media_product' => $media_product
                                    ];

                                    session()->put('cart', $cart);
                                     $this->getCart();
                }

                // if item not exist in cart then add to cart with quantity = 1
               

            }  

        } else {

                if($this->product->compare_selling_price){
                   $price = $this->product['compare_selling_price'];
                }else{
                   $price = $this->product['price'];
                }

                if(Auth::check()) {
                    $exist = Cart::where('product_id', $this->product->id)->where('user_id', Auth::user()->id)->first();

                    if(empty($exist)) {

                       $cart_arr = [
                            
                            'product_id' => $this->product->id,

                            'user_id' => Auth::user()->id,

                            'price' => $price,

                            'stock' => 1,

                            'locationid' => 1

                        ];

                        Cart::create($cart_arr);
                        $this->getCart();

                    } else {

                        Cart::where('id', $exist->id)->update(['stock' => $exist->stock + 1]);
                        $this->getCart();
                    }   
                } else {

                    $cart = session()->get('cart');

                    // if cart is empty then this the first product
                    if(!$cart) {

                        $cart = [
                                $this->product->id => [

                                    'type' => 'product',

                                    'product_id' => $this->product->id,

                                    'price' => $price,

                                    'stock' => 1,

                                    'locationid' => 1, 

                                    'product_detail' => $product_detail,

                                    'media_product' => $media_product
                                ]
                        ];

                        session()->put('cart', $cart);
                        $this->getCart();

                    } else if(isset($cart[$this->product->id])) {

                        $cart[$this->product->id]['stock']++;

                        session()->put('cart', $cart);
                        $this->getCart();


                    } else {
                        // if item not exist in cart then add to cart with quantity = 1
                        $cart[$this->product->id] = [
                            'type' => 'product',

                            'product_id' => $this->product->id,

                            'price' => $price,

                            'stock' => 1,

                            'locationid' => 1,

                            'product_detail' => $product_detail,

                            'media_product' => $media_product
                        ];



                        session()->put('cart', $cart);
                        $this->getCart();
                    }

                    

                }

                
            
            }


        


      

        
    }





}
