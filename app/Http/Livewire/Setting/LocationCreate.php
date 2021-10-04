<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

use App\Models\Country;

use App\Models\Location;

class LocationCreate extends Component
{
    public $countries,$location_name,$address,$apartment,$city,$country,$state,$pincode,$phone,$online_order;

    protected $rules = [

        'location_name' => ['required'],

        'online_order' => [],

        'address' => ['required'],

        'apartment' => ['required'],

        'city' => ['required'],
        
        'country' => [],
        
        'state' => [],

        'pincode' => [],

        'phone' => [],


    ];

    public function mount()
    {
        $this->countries = Country::all();
   
    }
    public function render()
    {
        return view('livewire.setting.location-create');
    }

    public function locationStore()
    {

        if($this->online_order == true) {

           $online_arr = 'true';

        } else {

           $online_arr = 'false';
        }

        $location_arr = [

            'name' => $this->location_name,

            'address' => $this->address,

            'apartment' => $this->apartment,
            
            'online_order' => $online_arr,

            'city' => $this->city,

            'country' => $this->country,

            'State' => $this->state,
            
            'pincode' => $this->pincode,
            
            'phone' => $this->phone,

        ];
        Location::create($location_arr);

        return redirect(route('locations'));

        
    }
}
