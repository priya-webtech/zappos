<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Component
{

    public function mount()
    {
        // if(!Auth::check()) {
        //     return view('livewire.admin.login');
        // } 
        // if (Auth::check() && !Auth::user()->hasRole('admin')) {
        //     return redirect('/');
        // } 
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
    public function checkLogin()
    {
    	if(!Auth::check()) {
    		return view('livewire.admin.login');
    	} elseif (!Auth::user()->hasRole('admin')) {
    		return redirect('/');
    	} else {
    		$this->render();
    	}
        
    }
}
