<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use App\Models\role;

class UpdateRole extends Component
{
	public $role;

	protected $rules = [
        'role.name' => ['required'],
    ];

	public function mount($id)
	{
		$this->role = role::where('id',$id)->first();	
	}
    public function render()
    {
        return view('livewire.role.update-role');
    }

    public function roleUpdate($id)
    {
    	role::where('id',$id)->update(['name' => $this->role['name'] ]);
    }
}
