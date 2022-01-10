<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\mail_notification;

class NotificationDetail extends Component
{
	public $notification;
	protected $rules = [

		'notification.discripation' => ['required'],

    ];

	public function mount($id)
	{
		$this->notification = mail_notification::where('id', $id)->first();
	}
    public function render()
    {
        return view('livewire.setting.notification-detail');
    }
    public function Update($flag)
    {
        if($flag == 'usernotify'){
	        $variationValue = mail_notification::query()->findOrFail($this->notification['id']);
            if ($variationValue) {
            	
               $variationValue->update([
                   'discripation' => $this->notification['discripation'],

                ]);
            } 
        }

        $this->notification = mail_notification::where('id', $this->notification['id'])->first();
        session()->flash('message', 'Record Updated Successfully.');
	         
    }
}
