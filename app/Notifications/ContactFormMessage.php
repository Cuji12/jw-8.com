<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Requests\ContactFormRequest;


class ContactFormMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $message;
    public function __construct(contactFormRequest $message)
    {
        $this->message = $message;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject($this->message->subject)
        ->from($this->message->email, $this->message->firstname, $this->message->lastname, "Company: ". $this->message->company)
        ->line($this->message->message);
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}