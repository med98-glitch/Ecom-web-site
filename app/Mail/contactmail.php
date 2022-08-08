<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactmail extends Mailable
{
    use Queueable, SerializesModels;
     
    public $adresse;
    public $name;
    public $subject;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adresse,$name,$subject,$message)
    {
        $this->adresse=$adresse;
        $this->name=$name;
        $this->subject=$subject;
        $this->message=$message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contactmail')->with($this->name,'subject','name',$this->subject,'adresse',$this->adresse,'message',$this->message);
    }
}
