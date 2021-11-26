<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\rolepermission;

class CreateRolePermission extends Component
{

	public $Permission = [];

    public function render()
    {
        return view('livewire.role-permission.create-role-permission');
    }

    public function Permissionsave(){
    	dd($Permission);
    	foreach ($Permission as $key => $value) {
    		rolepermission::create([
                'menu_id' => '2',

                'status	' => $value,
            ]);

            return redirect(route('role-permission'));
    	}
    }
}
