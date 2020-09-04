<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $telephone, $email, $nom)
    {
        $this->message = $message;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->nom = $nom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@africkup.com')->subject('Donnees Formulaire Contact')
        ->view('mails.contact')->with([
            'nom' => $this->nom,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'message' => $this->message]);
    }
}
