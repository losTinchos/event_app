<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;


class EmailForQueue extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $user = Auth::user();
        $event = $user->events;
        
        return $this->from("admin@gmail.com", "ADMIN")
                ->subject($this->title)
                ->view('emails_email', ['event_user' => $event])
                ->with([
                    "title" => $this->title
                ]);
    }
}
