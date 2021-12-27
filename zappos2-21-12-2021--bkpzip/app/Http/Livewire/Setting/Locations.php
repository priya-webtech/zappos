<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

use App\Models\Location;

class Locations extends Component
{

    public $location;

    public function mount()
    {
        $this->location = Location::all();
    }

    public function render()
    {
        return view('livewire.setting.locations');
    }
}
