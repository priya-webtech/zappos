<?php 

use App\Models\favorite;
use App\Models\ShippingCharge;
use App\Models\ProductVariant;
use App\Models\VariantTag;
use App\Models\Product;
use App\Models\Cart;
  

  function CurrencySymbol(){

    return [ 'currency' => '€' ];

 }

  function favorite($product_id){

  	if (Auth::check()) {
        
        $user_id = Auth::user()->id;

        return favorite::where(['product_id' => $product_id,'user_id' => $user_id])->first();

      }

 }

 function shipcharge($product_id,$checkproductname="blank"){

  	$shipping = ShippingCharge::orderBy('id', 'asc')->first();

  	if(!empty($shipping) && $checkproductname == 'variantproduct'){
      $productprice = ProductVariant::where('product_id',$product_id)->first();
  		if($productprice->price >= $shipping->maxcharge){
        return [ 'label' => 'Ships Free!', 'shipprice' => '','price' => $productprice['price'],'compare_price' => $productprice['compare_price']];
      }else{
        return [ 'label' => 'shipping cost $', 'shipprice' => $shipping['minrate'],'price' => $productprice['price'],'compare_price' => $productprice['compare_price']];
      }

  	}else{
      $productprice = Product::where('id',$product_id)->first();
      if($productprice->price >= $shipping->maxcharge){
  		  return [ 'label' => 'Ships Free!', 'shipprice' => '','price' => $productprice['price'],'compare_price' => $productprice['compare_price']];
      }else{
        return [ 'label' => 'shipping cost $', 'shipprice' => $shipping['minrate'],'price' => $productprice['price'],'compare_price' => $productprice['compare_price']];
      }
  }

 }

  function pricefetch($Cartid){
    
    $user_id = Auth::user()->id;
    $cartres = Cart::where(['id' => $Cartid,'user_id' => $user_id])->first();

    return [ 'price' => $cartres['price']];
  }

  function allprice($productid){
    
    $Productvariant = ProductVariant::with(['variant_stock' => function($q) {
            $q->where('location_id', 1);}])->where('product_id',$productid)->first();
    $product = Product::where(['id' => $productid])->first();
    
    if($Productvariant){
      if($Productvariant['selling_price']){
          $price = $Productvariant['selling_price'];
          $selling_price = $Productvariant['price'];

          $discount = $selling_price - $price;
           return [ 'label' => '' ,'price' => $price, 'selling_price' => $selling_price, 'discount' => $discount,'product' => $product ];
      }
      else
      {
         $price = $Productvariant['price'];
         $selling_price = '';
     
          return [ 'label' => 'product-single-price' ,'price' => $price, 'selling_price' => $selling_price,'product' => $product ];

      }


    }
    else{

      if($product['compare_selling_price']){
          $price = $product['compare_selling_price'];
          $selling_price = $product['price'];
          $discount = $selling_price - $price;
          
           return [ 'label' => '' ,'price' => $price, 'selling_price' => $selling_price, 'discount' => $discount,'product' => $product ];

      }
      else
      {
         $price = $product['price'];
         $selling_price = '';
          return [ 'label' => 'product-single-price' ,'price' => $price, 'selling_price' => $selling_price,'product' => $product ];

      }
     
    }
  }


?>