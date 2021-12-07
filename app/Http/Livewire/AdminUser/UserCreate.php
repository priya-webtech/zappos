<?php

namespace App\Http\Livewire\AdminUser;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
	public $first_name,$last_name,$roleuser,$email,$password;

    public function render()
    {
        return view('livewire.admin-user.user-create');
    }

    public function UserSave(){
    	$this->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'role' => ['required'],
            'password' => ['required'],
            'email' => ['required']
        ]);

    	$customer_arr = [

            'first_name' => $this->first_name,

            'last_name' => $this->last_name,

            'role' => $this->roleuser,

            'email' => $this->email,

            'password' => Hash::make($this->password),

        ];

        $user = User::create($customer_arr);
    }
}
