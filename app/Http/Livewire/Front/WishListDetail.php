<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;
use App\Models\favorite;
use Illuminate\Support\Facades\Auth;


class WishListDetail extends Component
{
	public $product,$user_id;

	protected $listeners = ['getProducts'];

	public function mount()
	{
		$this->user_id = Auth::user()->id;
		$this->getProducts();	
	}
    public function render()
    {
        return view('livewire.front.wish-list-detail');
    }

    public function getProducts($value='')
    {
        $this->dispatchBrowserEvent('onContentChanged');

		$this->product = Product::whereHas('favoriteget', function($q) {
			return $q->where('user_id', Auth::user()->id);
		})->with(['productmediaget','favoriteget'])->get();   
	}

	public function UpdateWish($value, $product_id) {

        if(!Auth::check()) {

             session()->flash('alert', 'You need to login');

        } else {
           
            if(!$value) {

                $favorite = favorite($product_id);
               
                $fav = favorite::findOrFail($favorite->id);
                $fav->delete();
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
            $this->getProducts();
            $this->emit('getCart');

        }
       
    }

}
