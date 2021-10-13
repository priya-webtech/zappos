<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\tagsale;

class Channels extends Component
{
	public $tagsale;
    public function render()
    {
    	$this->tagsale = tagsale::orderBy('id', 'DESC')->get();
        return view('livewire.setting.channels');
    }
}
