<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StripeDetail extends Component
{
	public $stripe_publishable_key;
    public $stripe_secret_key;

    public function mount()
    {
       	$data = DB::table('stripe_key_detail')->first();
       	$this->stripe_publishable_key = $data->stripe_publishable_key;
       	$this->stripe_secret_key = $data->stripe_secret_key;

    }

    public function render()
    {
        return view('livewire.stripe-detail');
    }


    public function save(Request $request)
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
