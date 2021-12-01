<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\rolepermission;
use App\Models\role;
use Illuminate\Http\Request;

class CreateRolePermission extends Component
{


    public function mount(){

        // $this->role_data = role::where('id', $id)->first();
    }
    public function render()
    {
        return view('livewire.role-permission.create-role-permission');
    }

    public function save(Request $request)
    {

        $user_validation = [
            'role_name' => 'required',
        ];

        
        if($request->role_id==null){
            $role=role::create(

                [
                    'name'  => $request->role_name,
                    'guard_name'  => 'web',
                ]
            );
        }
        else{
             $role=role::findOrFail($request->role_id);
             $role->update(
                 [
                  'name'  => $request->role_name,
                  'guard_name'  => 'web',
                
                ]
            );
        }

        $assign_privilege_array = $request->assign_privilege;

        $user_id = $role->id;
        $manage_privilege_array = array();
        if (count($assign_privilege_array) != 0) {
            foreach ($assign_privilege_array as $assign_privilege_array_key => $assign_privilege_array_val) {
                $manage_privilege_array[$assign_privilege_array_key][] = "list";
                foreach ($assign_privilege_array_val as $assign_privilege_array_val_key => $assign_privilege_array_val_val) {
                    $manage_privilege_array[$assign_privilege_array_key][] = $assign_privilege_array_val_key;
                }
            }
        }

        rolepermission::where('user_id',$user_id)->delete();
        if (count($manage_privilege_array) != 0) {
            foreach ($manage_privilege_array as $manage_privilege_array_key => $manage_privilege_array_val) {
                foreach ($manage_privilege_array_val as $manage_privilege_array_val_key => $manage_privilege_array_val_val) {
                    
                    $query = rolepermission::where(['privilege' => $manage_privilege_array_key, 'privilege_sub' => $manage_privilege_array_val_val, 'user_id' => $user_id])->get();
                    // dd($manage_privilege_array_val_val);

                    if (count($query) == 0) {
                        $data = array('user_id' => $user_id, 'privilege' => $manage_privilege_array_key, 'privilege_sub' => $manage_privilege_array_val_val, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'));

                        rolepermission::create($data);

                    } else {
                        rolepermission::where(['privilege' => $manage_privilege_array_key, 'privilege_sub' => $manage_privilege_array_val_val, 'user_id' => $user_id])->update(['deleted' => 0]);
                        // $this->db->update('role_manage_privilege', array(
                        //     'deleted'       => '0',
                        // ));
                    }
                }

            }

        }
        session()->flash('message', 'Permission Create Successfully!!');

        return redirect(route('create-role-permission'));
    }
}
