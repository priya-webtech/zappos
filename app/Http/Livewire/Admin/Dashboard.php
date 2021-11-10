<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
    public function checkLogin()
    {
    	if(!Auth::check()) {
    		return view('livewire.admin.login');
    	} elseif (in_array('admin', Auth::user()->getRoleNames()->toArray())) {
    		return redirect('/admin');
    	} else {
    		return redirect('/');
    	}
        
    }
}
