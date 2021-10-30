<?php 

use App\Models\favorite;
use App\Models\ShippingCharge;
use App\Models\ProductVariant;
use App\Models\Product;

  function favorite($product_id){

  	$user_id = Auth::user()->id;
  	$favorite = favorite::where(['product_id' => $product_id,'user_id' => $user_id])->first();

  	if(!empty($favorite) && $favorite->status == 1){
  		return [ 'class' => 'add-wishlist', 'id' => $favorite['id'], 'product_id' => $favorite['product_id']];
  	}else{
  		return [ 'class' => '', 'id' => '0','product_id' => $product_id];
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

?>