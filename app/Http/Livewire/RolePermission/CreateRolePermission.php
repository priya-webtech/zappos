<?php

namespace App\Http\Livewire\RolePermission;

use Livewire\Component;
use App\Models\rolepermission;
use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateRolePermission extends Component
{
    public $role_data,$roll_id,$privilege_user_selected=[],$getroleid;

    public function mount(){
        $privilege_user_selected = array();
        if (!empty($user_data)) {
            foreach ($user_data as $privilege_user_data_val) {
                $this->privilege_user_selected[] = $privilege_user_data_val->privilege . '_' . $privilege_user_data_val->privilege_sub;
            }
        }

         
        $this->role_data = role::get();
    }

    public function edit()
    {   
        $id = $this->roll_id;
        $this->getroleid = $this->roll_id;
        $per = User::where('id', $id)->first();
        $user_data = rolepermission::where('user_id', $id)->get();
        $privilege_user_selected = array();
        if (!empty($user_data)) {
            foreach ($user_data as $privilege_user_data_val) {
                $this->privilege_user_selected[] = $privilege_user_data_val->privilege . '_' . $privilege_user_data_val->privilege_sub;
            }
        }
      //  return view('livewire.role-permission.create-role-permission', compact(['per', 'privilege_user_selected']));
        // $iti_list = Itineraries::all();
        // $testimonials = Testimoial::all();
        // $result=NationalPark::where('id',$id)->get();
        // $result=$result[0];
        // return view('admin.national_parks.update',compact('result', 'iti_list', 'testimonials'));
    }

    public function DeleteRole($id){

        $Role_delete = role::where('id', $id)->delete();
        $permission_delete = rolepermission::where('user_id', $id)->delete();

        $userupdate = User::where('role', $id)->get();

        foreach ($userupdate as $key => $value) {
            User::where('id', $value->id)->update(['role'  => ""]);
        }
        


        session()->flash('message', 'Role Deleted Successfully!!');

        return redirect(route('create-role-permission'));

    }
    public function render()
    {
        return view('livewire.role-permission.create-role-permission');
    }

    public function save(Request $request)
    {


        if($request->role_name){
       
        $role_data = [
            'name' => $request->role_name,
            'guard_name' => 'web',
        ];

        $role = role::create($role_data);

        $new_role_id = role::orderBy('id', 'DESC')->first();

        $user_id = $new_role_id['id'];
        }else{
            $user_id = $request->role_id;
        }


        $assign_privilege_array = $request->assign_privilege;

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
