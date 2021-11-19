<?php

namespace App\Http\Livewire\Discount;

use Livewire\Component;

use App\Models\discount;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;


use str;

class DiscountCreate extends Component
{
	public $applyto,$type,$code,$discount_value,$randomString,$start_date,$end_date,$start_time,$end_time;
	public $selectedcollection = [], $selectedproduct = [], $set_end_date;

	protected $listeners = ['SaveRecord'];

     protected $rules = [

        'code' => ['required'],
        'discount_value' => ['required'],

    ];

    public function mount()
    {
        $this->type = '1';
        $this->applyto = '1';
        $this->set_end_date = false;
    }


    public function render()
    {
    	$this->collection = Collection::get();
		$this->product = Product::get();
        return view('livewire.discount.discount-create');
    }

    public function SetEndDate($value)
    {
        $this->set_end_date = $value;
    }

    public function RendomGenrate()
    {
    	$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWYZ';
    	$charactersLength = strlen($characters);
        $this->randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $this->randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->code = $this->randomString;
    }

    public function SaveRecord(Request $request, $flag)
    {	
        $this->validate($this->rules);
    	
		if(!empty($this->applyto)){
			if($this->applyto == '2'){
				$productarray = json_encode($this->selectedcollection);
			}else{
                 $productarray = '0';
            }
			if($this->applyto == '3'){
				$productarray = json_encode($this->selectedproduct);
			}else{
                 $productarray = '0';
            }
            
		}else{
            $productarray = '0';
        }

    	if($flag == 'save-discount')
        {

          

             discount::insert([
             	'code' => $this->code,
             	'type' => $this->type,
             	'discount_value' => $this->discount_value,
             	'applyto' => $this->applyto,
             	'apply_c_p' => $productarray,
             	'start_date' => $this->start_date,
             	'start_time' => $this->start_time,
             	'end_date' => $this->end_date,
             	'end_time' => $this->end_time,
             	'status' => '1',
             ]);

             session()->flash('message', 'Discount Created Successfully.');
             return redirect(route('discount-list'));
            //  $this->resetInput();
        }

    }
}
