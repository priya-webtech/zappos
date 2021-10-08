<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Harimayco\Menu\Models\MenuItems;
use App\Models\Product;
use App\Models\ProductMedia;

class ProductCategory extends Component
{
	public $menuitems,$Product,$Productmediass;

	public function mount($id) {
		$this->menuitems = MenuItems::where('label',$id)->first();
		$this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
		$this->Product = Product::get();
		if($this->menuitems['type_category'] == 3){
        return view('livewire.front.product-category');
		}
		if($this->menuitems['type_category'] == 2){
		return redirect($this->menuitems['link']);	
		}

	}
}
