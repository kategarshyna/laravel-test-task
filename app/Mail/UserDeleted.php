<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserDeleted extends Mailable
{
    use Queueable, SerializesModels;

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function build()
    {
        return $this->subject('Your account has been deleted!')
                    ->view('emails.userDeleted', ['name' => $this->name]);
    }
}
