<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\role;

class ManageRolePermission extends Component
{
	public $role;
	public function mount()
	{
		$this->role = role::get();
	}
    public function render()
    {
        return view('livewire.role-permission.manage-role-permission');
    }
}
