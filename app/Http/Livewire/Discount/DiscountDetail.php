<?php

namespace App\Http\Livewire\Discount;

use Livewire\Component;
use App\Models\discount;
use App\Models\Collection;
use App\Models\Product;

class DiscountDetail extends Component
{
	public $collection,$product,$discountlist,$randomString;
	public $selectedcollection = [], $selectedproduct = [];

	protected $rules = [
        'discountlist.code' => 'required',
        'discountlist.type' => 'required',
        'discountlist.discount_value' => 'required',
        'discountlist.applyto' => 'required',
        'discountlist.apply_c_p' => 'required',
        'discountlist.start_date' => 'required',
        'discountlist.end_date' => 'required',
        'discountlist.start_time' => 'required',
        'discountlist.end_time' => 'required',
    ];
	public function mount($id)
	{

		$this->collection = Collection::get();
		$this->product = Product::get();
		$this->discountlist = discount::where('id',$id)->first();
	}
	public function RendomGenrate()
    {
    	$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWYZ';
    	$charactersLength = strlen($characters);
        $this->randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $this->randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->discountlist['code'] = $this->randomString;
    }
    public function render()
    {
        return view('livewire.discount.discount-detail');
    }
    public function UpdateDiscount()
    {
        $productarray = [];
    	if(!empty($this->discountlist['applyto'])){
    		if($this->discountlist['applyto'] == '2'){
    			$productarray = json_encode($this->selectedcollection);
    		}
    		if($this->discountlist['applyto'] == '3'){
    			$productarray = json_encode($this->selectedproduct);
    		}
    	}
    	discount::where('id', $this->discountlist['id'])->update(

                [

                'code' => $this->discountlist['code'],
             	'type' => $this->discountlist['type'],
             	'discount_value' => $this->discountlist['discount_value'],
             	'applyto' => $this->discountlist['applyto'],
             	'apply_c_p' => $productarray,
             	'start_date' => $this->discountlist['start_date'],
             	'start_time' => $this->discountlist['start_time'],
             	'end_date' => $this->discountlist['end_date'],
             	'end_time' => $this->discountlist['end_time'],
             	'status' => '1',        

                ]

            );

    	session()->flash('message', 'Discount Update Successfully.');
    }
}
