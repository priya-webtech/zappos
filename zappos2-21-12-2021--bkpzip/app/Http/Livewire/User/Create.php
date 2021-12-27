<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\role;
use App\Notifications\SendDetailNotification;
use Dotenv\Util\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Livewire\Component;

class Create extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $mobile_number = '', $selected_id;
    protected $listeners = ['store', 'edit', 'update', 'delete'];
    public $updateMode = false;
    public $role,$getrole;
    public $auth_key = '';

    public function mount()
    {
        $this->getrole = role::get();

        if (Route::currentRouteName() == 'customers') {
            $this->role = 'customer';
        } else {
            $this->role = 'admin';
        }
        $this->auth_key = Auth::user()->id . $this->role;
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    private function resetCreateForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->mobile_number = '';
        $this->role = '';
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);
        $this->selected_id = $id;

        $this->first_name = $record->first_name;
        $this->last_name = $record->last_name;
        $this->role = $record->role;
        $this->email = $record->email;
        $this->mobile_number = $record->mobile_number;


        $this->updateMode = true;
    }

    public function update()
    {
        $user_data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'mobile_number' => $this->mobile_number,
        ];
        Validator::make($user_data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required'],
        ])->validate();

        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update($user_data);

            $this->resetCreateForm();
            $this->updateMode = false;

            if ($this->role == 'admin') {
                $this->emit('getUsers');
                session()->flash('message', 'User updated.');
            } else {
                $this->emit('getCustomers');
                session()->flash('message', 'Customer updated.');
            }
        }

    }

    public function store()
    {
        $user_data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'role' => $this->role,
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
        $user->assignRole($this->role);
        $this->resetCreateForm();
        $user['pw'] = $pw;
        // $this->sendLoginDetail($user);

        if ($this->role == 'admin') {
            session()->flash('message', 'User created.');
            $this->emit('getUsers');
        } else {
            session()->flash('message', 'Customer created.');
            $this->emit('getCustomers');
        }
        return $user;

    }

    public function delete($id)
    {
        User::find($id)->delete();

        if ($this->role == 'admin') {
            session()->flash('message', 'User deleted.');
            $this->emit('getUsers','delete-user'.$id);
        } else {
            session()->flash('message', 'Customer deleted.');
            $this->emit('getCustomers');
        }

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
}
