<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
  
  	//ADA DUA PARAMETER YANG AKAN KITA TERIMA, PERTAMA ADALAH JUDUL ARTIKEL DAN YANG KEDUA ADALAH NAMA PENERIMA
    public $title;
    public $name;
    public function __construct($title, $name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Postingan Baru Daengweb.id')->view('emails.posts');
    }
}