<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

use App\Models\tax;

class Taxes extends Component
{
    public $taxes;

    protected $rules = [ 'taxes.rate' => '' ];
    public function mount() {

        $this->taxes = tax::where('id',1)->first();
    }
    public function render()
    {
        return view('livewire.setting.taxes');
    }
    
    public function taxStore(Request $request)
    {
        dd($Request);
        tax::where('id', 1)->update([

            'rate' => $this->taxes['rate'],

        ]);
        
       session()->flash('message', 'Tax Updated Successfully.');
        
    }
}
