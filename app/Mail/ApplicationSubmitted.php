<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicationDetails)
    {
        $this->applicationDetails = $applicationDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Новая заявка на psyhab.ru')
                   ->from('avetisyan.watch@yandex.ru', 'PsyHab Website')
                   ->to('info@psyhab.ru')
                   ->markdown('emails.application_submitted');
    }
}
