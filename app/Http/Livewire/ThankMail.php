<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\mail_notification;

class ThankMail extends Component
{
	public $MailMessage;
	public function mount()
	{
		$this->MailMessage = mail_notification::where('id', 2)->first();
	}
    public function render()
    {
        return view('livewire.thank-mail');
    }
}
