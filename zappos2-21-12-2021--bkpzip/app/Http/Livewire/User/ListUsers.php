<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public $users;
    protected $listeners = ['getUsers'];


    public function render()
    {
        $this->getUsers();
        return view('livewire.user.list-users');
    }
    public function getUsers() {
        $this->users = User::role('admin')->get();
    }
}
