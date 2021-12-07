<?php

namespace App\Http\Livewire\AdminUser;

use Livewire\Component;
use App\Models\User;

class UserCreate extends Component
{
	public $first_name,$last_name,$roleuser,$email,$password;

    public function render()
    {
        return view('livewire.admin-user.user-create');
    }

    public function UserSave(){

    	$customer_arr = [

            'first_name' => $request['customer_first_name'],

            'last_name' => $request['customer_last_name'],

            'mobile_number' => $request['customer_mobile_number'],

            'email' => $request['customer_email'],

            'password' => Hash::make($pw),

            'status' => 'invited'

        ];



        /*add customer*/

        $user = User::create($customer_arr);
        
    	dd('hello');
    }
}
