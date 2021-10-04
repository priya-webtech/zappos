<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductMedia;
use Livewire\Component;

class Dashboard extends Component
{
    public $product,$Productmediass;

    public function mount()
    {
        $this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
        $this->Product = Product::orderBy('id','asc')->limit(8)->get();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

}
