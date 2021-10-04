<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;

use App\Models\ProductMedia;

use App\Models\ProductVariant;

use App\Models\Tag;

use App\Models\VariantStock;

use App\Models\Collection;

use App\Models\Location;

use App\Models\VariantTag;

use Livewire\Component;

use Illuminate\Http\Request;

class Inventory extends Component
{
    public $VariantStock, $Product, $update_text_stock, $ProductMedia, $Location_filter, $stockrow, $Location;

    protected $rules = [

        'VariantStock.*.variant_stock.*.stock' => '',

    ];

    public function mount($id = '2') {
        $this->VariantStock = ProductVariant::with('variant_stock')->get();
         $this->Location_filter = Location::where('id',$id)->first();
        $this->Location = Location::get();
        $this->Product = Product::get();
        $this->ProductMedia = ProductMedia::first();
       
        
    }

   public function locationupdate($location_id) {

        $this->VariantStock = ProductVariant::with('variant_stock')->get();
        $this->Location_filter = Location::where('id',$location_id)->first();
    }

    public function render()
    {
        return view('livewire.product.inventory');
    }

    public function store(Request $request)
    { 
        if($request->stock != ""){
            VariantStock::where('id', $request->stockid)->update(['stock' => $request->stock]);
        }
        else
        {
            VariantStock::where('id', $request->stockid)->update(['stock' => '0']);
        }
    }
}
