<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

use App\Models\Location;

use App\Models\Country;

class LocationsDetail extends Component
{
    public $location,$countries;

    public function mount($id) {

        $this->location = Location::where('id',$id)->first();

        $this->countries = Country::all();

         if($this->location['online_order'] == 'true') {

            $this->location['online_order']= true;



        } else {

            $this->location['online_order'] = false;



        }
    }

    protected $rules = [

        'location.name' => [],

        'location.online_order' => [],

        'location.address' => [],

        'location.apartment'=> [],

        'location.city'=> [],

        'location.country'=> [],

        'location.State'=> [],

        'location.pincode' => [],

        'location.phone' => [],

    ];

    public function render()
    {

        return view('livewire.setting.locations-detail');
    }

    public function update()

    {
        if ($this->location['online_order'] == true) {

            $online_order = 'true';

        } 

        else {

              $online_order = 'false';
        }

        Location::where('id', $this->location['id'])->update(

            [

                'name'          => $this->location['name'],

                'online_order'  => $online_order,

                'address'       => $this->location['address'],

                'apartment'     => $this->location['apartment'],

                'city'          => $this->location['city'],
                
                'country'       => $this->location['country'],
                
                'State'         => $this->location['State'],
                
                'pincode'       => $this->location['pincode'],
                
                'phone'         => $this->location['phone']

            ]

        );

    

        session()->flash('message', 'Users Updated Successfully.');

        // $this->customer = $this->customerData;

        
    }
}
