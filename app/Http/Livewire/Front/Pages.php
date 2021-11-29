<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\page;

class Pages extends Component
{
	public $pages;
	public function mount($slug){
		$this->pages = page::where('seo_url',$slug)->first();
	}
    public function render()
    {
        return view('livewire.front.pages');
    }
}
