<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Takeaway1Mail extends Mailable
{
    use Queueable, SerializesModels;
    public $name , $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name , $id)
    {
        //
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->from('heyrihermawan555@gmail.com')
        ->view('emails.notify_takeaway1')
        ->with($this->name,$this->id);
    }
}
