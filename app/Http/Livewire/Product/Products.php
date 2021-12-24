<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

use App\Models\Product;

use App\Models\ProductMedia;

use App\Models\VariantStock;

use App\Models\ProductVariant;

use Carbon\Carbon;

use Carbon\Language;

use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;

use Livewire\WithPagination;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Pagination\LengthAwarePaginator;


class Products extends Component
{
    use WithFileUploads, WithPagination;

    public $getproduct,$VariantStock, $productVariant ,$variationValue,$Productmediass,$date_of_order, $date_added_as_customer, $abandoned_checkout, $customer_language, $location, $countries, $save_filter,$filter_product,$user_id,

        $filter_tabs, $active_tab, $sort_by, $export, $export_as, $selected_file;

    public $filter = [], $languages = [], $selectedproducts = [];

    public $perPage = 10;

    public function mount()
    {

        $this->user_id = Auth::user()->role;
        $this->getProduct();
    }


    public function render()
    {
        $filter_clone = $this->filter;

        $this->getProduct();

        if ($filter_clone != $this->filter) {

           $this->resetPage();

        }

        $items = $this->getproduct->forPage($this->page, $this->perPage);

        $paginator = new LengthAwarePaginator($items, $this->getproduct->count(), $this->perPage, $this->page);

        

        // $offset = max(0, ($this->page - 1) * $this->perPage);

        // $items = $this->getproduct->slice($offset, $this->perPage + 1);

        // $paginator  = new Paginator($items, $this->perPage, $this->page);
       // $paginator = Product::query()->paginate($this->perPage);
        return view('livewire.product.products', ['product'=> $paginator]);
    } 

    public function store($flag = "")
    {
           
        if($flag == 'active'){
      
            foreach ($this->selectedproducts as $key => $value) {
     
                Product::where('id', $value)->update(['status' => 'active']);
                    
            }
        }
        if($flag == 'draft'){
      
            foreach ($this->selectedproducts as $key => $value) {
     
                Product::where('id', $value)->update(['status' => 'invited']);
                    
            }
        }
        if($flag == 'archive'){
      
            foreach ($this->selectedproducts as $key => $value) {
     
                Product::where('id', $value)->update(['status' => 'disabled']);
                    
            }
        }
        if($flag == 'delete'){
      
            foreach ($this->selectedproducts as $key => $value) {
     
                Product::where('id', $value)->delete();
                    
            }
        }

        $this->updateMode = false;               
         $this->getProduct();
    }

    public function getProduct()
    {
        $this->filter = [];

        $this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
        
        $this->VariantStock = VariantStock::All();
        
        $this->productVariant = ProductVariant::All();
        
        $this->getproduct = Product::when($this->filter_product, function ($query, $filter_product) {

            $query->where('title', 'LIKE', '%' . $filter_product . '%');

            })->get();
    } 
}
