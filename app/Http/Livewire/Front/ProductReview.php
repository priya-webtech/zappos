<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductReview extends Component
{

	public $text,$name,$image,$city,$brand;

	protected $rules = [

        'text' => '',
        'name' => '',
        'city' => '',
        'brand' => '',
        'image' => '',

    ];
    public function render()
    {
    	$user_id = Auth::user()->id;
        return view('livewire.front.product-review');
    }

    public function SaveReview()
    {
    	if($this->image){
    		$path_url = $this->image->storePublicly('review','public');
    	}else{
    		$path_url = 'null';
    	}


    	$review_arr = [
                    
                    'text' => $this->text,

                    'name' => $this->name,
                    
                    'image' => $path_url,
                    
                    'city' => $this->city,
                    
                    'brand' => $this->brand,

                    'status' => '1',
                ];

        reviews::create($review_arr);
       // return view('livewire.front.product-review');
    }
}

