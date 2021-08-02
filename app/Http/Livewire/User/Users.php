<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.user.users');
    }

    public function openModal()
    {
        $this->emit('show');
    }


}
