<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\role;
use App\Models\User;
use App\Models\rolepermission;

class UpdateRolePermission extends Component
{
	public $role,$Userdata,$privilege_user_selected=[],$per,$role_data;
  //  protected $listeners = ['initial'];

    protected $rules = [

        'per.first_name' => ['required'],

        'per.last_name'=> ['required'],

        'per.mobile_number'=> ['required'],
      
        'per.role'=> ['required'],

    ];
	public function mount($id)
	{
        $this->per = User::where('id', $id)->first();
        $this->initial();
	}

    public function initial()
    {
        $this->role = role::where('id', $this->per['role'])->first();
        $user_data = rolepermission::where('user_id', $this->per['role'])->get();
        $this->role_data = role::get();
        $privilege_user_selected = array();
        if (!empty($user_data)) {
            foreach ($user_data as $privilege_user_data_val) {
                $this->privilege_user_selected[] = $privilege_user_data_val->privilege . '_' . $privilege_user_data_val->privilege_sub;
            }
        }
    }

    public function UpdateUser($id){

        $this->validate([
            'per.first_name' => ['required'],

            'per.last_name'=> ['required'],

            'per.mobile_number'=> ['required'],
            
            'per.role'=> ['required'],
        ]);

        User::where('id', $id)->update(

                [
                    'first_name'    => $this->per['first_name'],

                    'last_name'     => $this->per['last_name'],

                    'mobile_number' => $this->per['mobile_number'],
                    
                    'role'          => $this->per['role']

                ]

            );
        $this->per = User::where('id', $id)->first();
        $this->initial();

        session()->flash('message', 'Users Updated Successfully.');
    }

    public function DeleteUser($id){

        User::find($id)->delete();

        $this->per = User::where('id', $id)->first();
        $this->initial();
        
        session()->flash('message', 'Users Deleted Successfully.');

         return redirect(route('role'));
    }

    public function render()
    {
        return view('livewire.role-permission.update-role-permission');
    }
}
