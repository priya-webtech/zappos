<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

use App\Models\mail_notification;

class Notifications extends Component
{
	public $notification,$descripation;


	public function mount()
	{
		$this->notification = mail_notification::orderBy('id', 'ASC')->get();
	}
    public function render()
    {
        return view('livewire.setting.notifications');
    }
    public function Update($flag)
    {
    	 if($flag == 'usernotify'){

    	 foreach ($this->notification as $key => $value) {
	        $id = $this->notification[$key]['id'];
	        $variationValue = mail_notification::query()->findOrFail($id);
	            if ($id) {
	            	
	               $variationValue->update([
	                   'discripation' => $this->notification[$key]['discripation'],

	                ]);
	            } 
	         }
       //  mail_notification::where('id', $id)->update(['discripation' => $this->descripation]);
     }

     session()->flash('message', 'Record Updated Successfully.');

    }
}
