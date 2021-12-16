<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\tax;
use App\Models\Collection;
use Illuminate\Http\Request;


class Plan extends Component
{

	public $taxes,$Collection,$country,$rate;
	public $collection = [];

    protected $rules = [ 'rate' => '' ];

    public function mount(){
    	$this->taxes = tax::All();
    	$this->Collection = Collection::All();
    }

    public function render()
    {
        return view('livewire.setting.plan');
    }

    public function taxStore(Request $request)
    {
   
    	$json_collection = json_encode($request->collection);
    	$data = [
            'rate' => $request->rate,
            'collection' => $json_collection,
            'country' => 'netherlands',
            
        ];
    	tax::create($data);
/*        tax::where('id', 1)->update([

            'rate' => $this->taxes['rate'],

        ]);*/
        
       session()->flash('message', 'Tax Create Successfully.');
        
    }
}
