<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\ShippingCharge;

class Shipping extends Component
{
    public $charge;

    protected $rules = [

        'charge.maxrate' => '',
        'charge.maxcharge' => '',
        'charge.minrate' => '',
        'charge.mincharge' => '',
    ];

    public function mount() {

        $this->charge = ShippingCharge::where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.setting.shipping');
    }


    public function UpdateShipping()
    {
        ShippingCharge::where('id', $this->charge['id'])->update(

                [

                    'maxrate'    => $this->charge['maxrate'],

                    'maxcharge'  => $this->charge['maxcharge'],

                    'minrate'    => $this->charge['minrate'],

                    'mincharge'  => $this->charge['mincharge']

                ]
        );

        session()->flash('message', 'Record Updated Successfully.');
    }
}
