<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;
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
}
