<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProfileRejcted extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->line('Thank you for your interest in our company.We appreciate the time and efforts
                    you have put into your application.We have a number of creteria obligatory to be met by 
                    an applicant in order to be approved for a freelancer position in our company.It includes an arithmetic
                    and veifiable academic certificates,appropriate skills,validity and creditability of the contact 
                    information provided , previous application history and  the overal test score.Unfortunately you 
                    have not met one or more of those requirements and we cannot accept you into our team of Freelancers
                    
                    We wish you all the best in your future endevours')
        
                    ->line('Thank you for using trying Ediyt');
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
