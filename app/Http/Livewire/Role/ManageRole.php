<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use App\Models\role;

class ManageRole extends Component
{
	public $role;

	public function mount(){
		$this->role = role::get();
	}
    public function render()
    {
        return view('livewire.role.manage-role');
    }


}
