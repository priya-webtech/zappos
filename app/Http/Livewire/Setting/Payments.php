<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Payments extends Component
{
	public $stripe_publishable_key;
    public $stripe_secret_key;

	public function mount()
    {
    	$this->stripe_publishable_key = '';
       	$this->stripe_secret_key = '';

       	$data = DB::table('stripe_key_detail')->first();

       	if(!empty($data)) {
       		$this->stripe_publishable_key = $data->stripe_publishable_key;
       		$this->stripe_secret_key = $data->stripe_secret_key;

       	}
       	
    }

    public function render()
    {
        return view('livewire.setting.payments');
    }

    public function save()
    {

    	$this->validate([
            'stripe_publishable_key' => 'required',
            'stripe_secret_key' => 'required',
        ]);


    	$data = DB::table('stripe_key_detail')->first();
    	if(empty($data)) {
    		DB::table('stripe_key_detail')->insert([
	    		'stripe_publishable_key' => $this->stripe_publishable_key,
	    		'stripe_secret_key' => $this->stripe_secret_key,
	    		'created_at' => now(),
	    		'updated_at' => now()
	    	]);
    	} else {
	    	DB::table('stripe_key_detail')->update([
	    		'stripe_publishable_key' => $this->stripe_publishable_key,
	    		'stripe_secret_key' => $this->stripe_secret_key,
	    		'updated_at' => now()
	    	], ['created_at' => $data->created_at]);
	    }

	    session()->flash('message', 'Data Saved');

    }
}
