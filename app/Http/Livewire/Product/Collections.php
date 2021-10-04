<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

use App\Models\Collection;


class Collections extends Component
{
    public $collection;

    public function mount()
    {
        $this->collection = Collection::all();
    }


    public function render()
    {
        return view('livewire.product.collections');
    }
}
