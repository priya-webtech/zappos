<?php

namespace App\Http\Livewire\OnlineStore;

use Livewire\Component;

use App\Models\Menu;

class Menus extends Component
{
    public $menulist;

    public function render()

    {

        $this->menulist = Menu::with(['items'=>function ($q) {

            $q->where('depth', 0);

        }])->get();

        return view('livewire.online-store.menus');

    }
}
