<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use App\Models\User;
use App\Models\role;
use App\Notifications\SendDetailNotification;
use Dotenv\Util\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;

class CreateRole extends Component
{
	public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $role_value = '';
    public $mobile_number = '', $selected_id;
    protected $listeners = ['store', 'edit', 'update', 'delete'];
    public $updateMode = false;
    public $role,$getrole;
    public $auth_key = '';
    public $users;

    public function mount()
    {
        $this->getrole = role::get();
        $this->users = User::role('admin')->get();
        if (Route::currentRouteName() == 'customers') {
            $this->role = 'customer';
        } else {
            $this->role = 'admin';
        }
        $this->auth_key = Auth::user()->id . $this->role;
    }
    public function render()
    {
        return view('livewire.role.create-role');
    }
     private function resetCreateForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->mobile_number = '';
        $this->role = '';
    }
    public function store()
    {

        $user_data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'role' => $this->role_value,
            'mobile_number' => $this->mobile_number,
        ];

        Validator::make($user_data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'mobile_number' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ])->validate();
        $pw = \Illuminate\Support\Str::random(8);
        // $user_data['password'] = Hash::make($pw);
        $user_data['password'] = Hash::make('wrnkqg8u');
        if ($this->role == 'admin') {
            $user_data['email_verified_at'] = now();
        }
        $user = User::create($user_data);
        //y$user->assignRole($this->role);
        $this->resetCreateForm();
        $user['pw'] = $pw;
        // $this->sendLoginDetail($user);

        if ($this->role == '1') {
            session()->flash('message', 'User created.');
            $this->users = User::role('admin')->get();
        } else {
            session()->flash('message', 'Customer created.');
            $this->emit('getCustomers');
        }
        return $user;

    }
    public function sendLoginDetail($user)
    {
        $loginDetail = [
            'name' => '#007 Bill',
            'body' => 'You have received a new bill.',
            'thanks' => 'Thank you',
            'text' => '$600',
            'offer' => url('/'),
            'bill_id' => 30061
        ];

        \Illuminate\Support\Facades\Notification::send($user, new SendDetailNotification($loginDetail));

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
