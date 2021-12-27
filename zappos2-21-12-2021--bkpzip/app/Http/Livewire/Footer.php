<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\page;

class Footer extends Component
{

	public $pages;
	public function mount(){
		$this->pages = page::get();
	}
    public function render()
    {
        return view('livewire.footer');
    }
}
