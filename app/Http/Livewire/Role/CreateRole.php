<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use App\Models\role;

class CreateRole extends Component
{
	public $role_name;

    public function render()
    {
        return view('livewire.role.create-role');
    }

    public function roleSave(){

    	$this->validate([
            'name' => ['required'],
        ]);
        
    	$role_data = [
            'name' => $this->role_name,
            'guard_name' => 'webbgui',
        ];

        $role = role::create($role_data);
    }
}
