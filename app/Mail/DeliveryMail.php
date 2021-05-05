<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeliveryMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name , $address ,$no_telp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name , $address ,$no_telp)
    {
        //
        $this->name = $name;
        $this->address = $address;
        $this->no_telp = $no_telp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('heyrihermawan555@gmail.com')
        ->view('emails.notify_skck_delivery')
        ->with($this->name,$this->address,$this->no_telp);
    }
    
}
