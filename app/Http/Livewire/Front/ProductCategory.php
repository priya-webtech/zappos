<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Harimayco\Menu\Models\MenuItems;

class ProductCategory extends Component
{
	public $menuitems;

	public function mount($id) {
		$this->menuitems = MenuItems::where('label',$id)->first();
	}
    public function render()
    {
        return view('livewire.front.product-category');
        
    }
}
