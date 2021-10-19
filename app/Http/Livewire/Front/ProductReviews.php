<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\review;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviews extends Component
{
	public $product_id,$productget;

	protected $rules = [

        'text' => '',
        'name' => '',
        'city' => '',
        'brand' => '',
        'image' => '',

    ];

    public function mount($id)
    {
    	$this->product_id = $id;
    	$this->productget = Product::where(['id' => $this->product_id])->first();
    }

    public function render()
    {
    	$this->user_id = Auth::user()->id;
        return view('livewire.front.product-reviews');
    }

    public function SaveReview(Request $res)
    {

    	$product = Product::where(['id' => $res->productid])->first();
    	$this->user_id = Auth::user()->id;
    	if($res->image){
    		$path_url = $res->image->storePublicly('review','public');
    	}else{
    		$path_url = 'null';
    	}

    	$review_arr = [
                    
                    'product_id'  => $res->productid,
                   
                    'user_id'     => $this->user_id,
                   
                    'overall' 	  => $res->overall,
                    
                    'comfort' 	  => $res->comfort,
                    
                    'style' 	  => $res->style,
                    
                    'text' 	      => $res->text,

                    'name' 		  => $res->name,
                    
                    'image'       => $path_url,
                    
                    'city'        => $res->city,
                    
                    'brand'       => $res->brand,

                    'status'      => '1',
                ];

        review::create($review_arr);

    }
}
