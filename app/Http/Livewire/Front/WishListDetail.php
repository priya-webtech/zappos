<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;
use App\Models\favorite;
use Illuminate\Support\Facades\Auth;


class WishListDetail extends Component
{
	public $product,$user_id;
	public function mount()
	{
		$this->user_id = Auth::user()->id;
		$this->product = Product::with('productmediaget')->with('favoriteget')->get();
		
	}
    public function render()
    {
        return view('livewire.front.wish-list-detail');
    }

    public function UpdateWish($id,$productid){

    	if (Auth::check()) {
    		$this->user_id =  Auth::user()->id;
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
    }
}
