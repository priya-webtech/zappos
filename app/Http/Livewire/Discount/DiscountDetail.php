<?php

namespace App\Http\Livewire\Discount;

use Livewire\Component;
use App\Models\discount;

class DiscountDetail extends Component
{
	public $discountlist;
	public function mount($id)
	{
		$this->discountlist = discount::where('id',$id)->get();
	}
    public function render()
    {
        return view('livewire.discount.discount-detail');
    }
}
