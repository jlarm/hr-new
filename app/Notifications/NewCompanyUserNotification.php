<?php

namespace App\Notifications;

use App\Models\Company;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCompanyUserNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(private readonly User $user, private readonly Company $company) {}

    public function via($notifiable): array
    {
        return ['mail'];
    }

    // TODO: Need content for the email

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Welcome to ' . $this->company->name . ' ' . $this->user->name)
            ->line('The introduction to the notification.')
            ->action('Register your company', url(route('register', ['id' => $this->user->uuid])))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
