<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
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
    public function __construct($name,$email,$msg)
    {
       $this->name=$name;
       $this->email=$email;
       $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.messages.created'
        )->with([
            'name'=>'ndeme yvan',
            'email'=>'ndemeYvan@gmail.com',
            'msg'=>'Je suis vraiment heureux de faire partie de la communaute',
        ]);
       // ->text('emails.messages.created_plain');
        //version html et en bas la version text plain
    }
}
