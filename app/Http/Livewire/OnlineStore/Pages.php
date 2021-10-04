<?php

namespace App\Http\Livewire\OnlineStore;

use Livewire\Component;
use App\Models\page;

class Pages extends Component
{
    public $pages;

    public function mount() {
        $this->pages = page::All();
    }
    public function render()
    {
        return view('livewire.online-store.pages');
    }
}
