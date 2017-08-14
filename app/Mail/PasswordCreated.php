<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class PasswordCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $newUser;
     public $pw;

    public function __construct(User $user, string $password)
    {
        $this->newUser = $user->toArray();
        $this->pw = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.password.created')
                    ->with(['name' => $this->newUser['name'], 'email' => $this->newUser['email'], 'password' => $this->pw]);
    }
}
