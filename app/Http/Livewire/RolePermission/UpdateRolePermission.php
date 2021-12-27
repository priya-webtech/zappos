<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\role;
use App\Models\User;
use App\Models\rolepermission;

class UpdateRolePermission extends Component
{
	public $role,$Userdata,$privilege_user_selected=[],$per;

	public function mount($id)
	{

        $this->per = User::where('id', $id)->first();
        $this->role = role::where('id', $this->per['role'])->first();
        $user_data = rolepermission::where('user_id', $this->per['role'])->get();
        $privilege_user_selected = array();
        if (!empty($user_data)) {
            foreach ($user_data as $privilege_user_data_val) {
                $this->privilege_user_selected[] = $privilege_user_data_val->privilege . '_' . $privilege_user_data_val->privilege_sub;
            }
        }
	}

    public function render()
    {
        return view('livewire.role-permission.update-role-permission');
    }
}
