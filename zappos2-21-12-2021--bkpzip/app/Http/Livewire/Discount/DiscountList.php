<?php

namespace App\Http\Livewire\Discount;

use Livewire\Component;
use App\Models\discount;

class DiscountList extends Component
{
	public $discountlist;
	public function mount()
	{
		$this->discountlist = discount::get();
	}
    public function render()
    {
        return view('livewire.discount.discount-list');
    }
}
