<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SKCKMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name , $address ,$no_telp,$born,$date,$nik;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name , $address ,$no_telp,$born,$date,$nik)
    {
        //
        $this->name = $name;
        $this->address = $address;
        $this->no_telp = $no_telp;
        $this->born = $born;
        $this->date = $date;
        $this->nik = $nik;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('heyrihermawan555@gmail.com')
        ->view('emails.notify_skck_delivery')
        ->with($this->name,$this->address,$this->no_telp,$this->born,$this->date,$this->nik);
    }
}
