<?php 

use App\Models\favorite;

  function favorite($product_id){

  	$user_id = Auth::user()->id;
  	$favorite = favorite::where(['product_id' => $product_id,'user_id' => $user_id])->first();

  	if(!empty($favorite) && $favorite->status == 1){
  		return [ 'class' => 'add-wishlist', 'id' => $favorite['id'], 'product_id' => $favorite['product_id']];
  	}else{

  		return [ 'class' => '', 'id' => $favorite['id'], 'product_id' => $favorite['product_id']];
  	}

 }

?>