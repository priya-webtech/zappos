<?php

namespace App\Http\Livewire\Discount;

use Livewire\Component;

use App\Models\discount;

use str;

class DiscountCreate extends Component
{
	public $applyto,$type,$code,$discount_value,$randomString,$start_date,$end_date,$start_time,$end_time;

	protected $listeners = ['SaveRecord'];
    public function render()
    {

        return view('livewire.discount.discount-create');
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

    public function SaveRecord($flag)
    {

    	if($flag == 'save-discount')
        {

            $this->validate([
                'code' => 'required',
                'discount_value' => 'required'
            ]);

             discount::insert([
             	'code' => $this->code,
             	'type' => $this->type,
             	'discount_value' => $this->discount_value,
             	'applyto' => $this->applyto,
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
