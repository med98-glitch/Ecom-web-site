<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $lastName;
    public $product;
    public $phone;
    public $adresse;
    public $total;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$lastName,$product,$phone,$adresse,$total)
    {
        $this->name = $name;
        $this->lastName=$lastName;
        $this->product=$product;
        $this->phone=$phone;
        $this->adresse=$adresse;
        $this->total=$total;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.ordermail')->with('name', $this->name,'lastName',$this->lastName,'product',$this->product,'phone',$this->phone,'adresse',$this->adresse,'total',$this->total);
    }
}
