<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\role;

class UpdateRolePermission extends Component
{
	public $role;
	public function mount($id)
	{
		$this->role = role::get();
		
	}

    public function render()
    {
        return view('livewire.role-permission.update-role-permission');
    }
}
