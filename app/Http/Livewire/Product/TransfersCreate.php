<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

use App\Models\Product;

use App\Models\ProductMedia;

use App\Models\ProductVariant;

use App\Models\Tag;

use App\Models\VariantStock;

use App\Models\Collection;

use App\Models\Location;

use App\Models\VariantTag;

use Illuminate\Http\Request;

class TransfersCreate extends Component
{
    public $Location, $VariantStock, $Product;
    public function mount() {
        $this->VariantStock = ProductVariant::with('variant_stock')->get();
        $this->Location = Location::get();
        $this->Product = Product::get();
        $this->ProductMedia = ProductMedia::first();  
    }

    public function render()
    {
        return view('livewire.product.transfers-create');
    }
}
