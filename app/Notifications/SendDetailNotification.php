<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendDetailNotification extends Notification
{
    use Queueable;
    private $loginDetail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($loginDetail)
    {
        $this->loginDetail = $loginDetail;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Estore : Login Detail')
                    ->line('This is your login detail for Estore Admin Panel')
                    ->line('Username : '. $notifiable->email)
                    ->line('Password : '. $notifiable->pw)
                    ->action('Estore', url('/admin'))
                    ->line('Thank you ');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
