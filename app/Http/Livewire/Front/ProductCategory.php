<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Harimayco\Menu\Models\MenuItems;
use App\Models\Product;
use App\Models\ProductMedia;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ProductCategory extends Component
{
	use WithFileUploads, WithPagination;

	public $menuitems,$getproduct,$Productmediass,$amount_spent,$filter_product;
	//protected $paginationTheme = 'bootstrap';
	public $perPage = 10;
	public function mount($slug) {

		$this->menuitems = MenuItems::where('link',$slug)->first();
		$this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
		

	}

	public function render()
	{
		//$this->Product = Product::get();
		$this->getproduct = Product::when($this->filter_product, function ($query, $filter_product) {

            $query->where('title', 'LIKE', '%' . $filter_product . '%');

            })

        ->when($this->amount_spent, function ($query, $amount_spent) {

            $query->where('price', '>', $amount_spent);

        })->orderBy('title','DESC')->get();


		$offset = max(0, ($this->page - 1) * $this->perPage);

        $items = $this->getproduct->slice($offset, $this->perPage + 1);

        $paginator  = new Paginator($items, $this->perPage, $this->page);


		if($this->menuitems['type_category'] == 3){
         return view('livewire.front.product-category', ['Product' => $paginator]);
		}
		if($this->menuitems['type_category'] == 2){
		return redirect('product/'.$this->menuitems->link);	
		}
	}
}
