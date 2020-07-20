<?php

namespace App\Mail;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public  $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
       $this->name=$message->name;
       $this->email=$message->email;
       $this->msg=$message->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.markdown');
    }
}
