<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\review;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviews extends Component
{
	public $product_id,$productget,$reviewget;

	protected $rules = [

        'text' => '',
        'name' => '',
        'city' => '',
        'brand' => '',
        'image' => '',

    ];

    public function mount($id)
    {
        $this->user_id = Auth::user()->id;
    	$this->product_id = $id;
    	$this->productget = Product::where(['id' => $this->product_id])->first();
        $this->reviewget = review::where(['product_id' => $this->product_id,'user_id' => $this->user_id])->first();
    }

    public function render()
    {
        return view('livewire.front.product-reviews');
    }

    public function SaveReview(Request $res)
    {
        $this->user_id = Auth::user()->id;
    	$product = Product::where(['id' => $res->productid])->first();
        $productreview = review::where(['product_id' => $res->productid,'user_id' => $res->productid,])->first();
        if(!empty($productreview)){

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
                ];

        review::create($review_arr);
        }
        else{

            if($res->image){
            $path_url = $res->image->storePublicly('review','public');
            }else{
                $path_url = 'null';
            }
            review::where('id', $productreview['id'])->update(

                [

                    'product_id'  => $res->productid,
                   
                    'user_id'     => $this->user_id,
                   
                    'overall'     => $res->overall,
                    
                    'comfort'     => $res->comfort,
                    
                    'style'       => $res->style,
                    
                    'text'        => $res->text,

                    'name'        => $res->name,
                    
                    'image'       => $path_url,
                    
                    'city'        => $res->city,
                    
                    'brand'       => $res->brand,                

                ]

            );

             return redirect(route('product-front-detail', $product->seo_utl));
        }

    }
}
