<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\review;
use Illuminate\Http\Request;

class ProductReviews extends Component
{
	public $text,$name,$image,$city,$brand,$user_id;

	protected $rules = [

        'text' => '',
        'name' => '',
        'city' => '',
        'brand' => '',
        'image' => '',

    ];

    public function render()
    {
    	$this->user_id = Auth::user()->id;
        return view('livewire.front.product-reviews');
    }

    public function SaveReview(Request $res)
    {
    	$this->user_id = Auth::user()->id;
    	if($res->image){
    		$path_url = $res->image->storePublicly('review','public');
    	}else{
    		$path_url = 'null';
    	}

    	$review_arr = [
                    
                    'product_id' => '1',
                   
                    'user_id' => $this->user_id,
                   
                    'text' 	  => $res->text,

                    'name' => $res->name,
                    
                    'image' => $path_url,
                    
                    'city' => $res->city,
                    
                    'brand' => $res->brand,

                    'status' => '1',
                ];

        review::create($review_arr);
        return view('livewire.front.product-review');
    }
}
