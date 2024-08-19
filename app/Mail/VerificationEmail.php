<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.verification')
            ->with([
                'name' => $this->user->name,
                'verificationUrl' => route('verification.verify', [
                    'id' => $this->user->id,
                    'hash' => sha1($this->user->email),
                ]),
            ])
            ->subject('Verifikasi Email Anda');
    }
}
