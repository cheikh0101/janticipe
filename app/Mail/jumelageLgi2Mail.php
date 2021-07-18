<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class jumelageLgi2Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $details1;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $details1)
    {
        $this->details = $details;
        $this->details1 = $details1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Résultat du Jumelage 2020-2021')->view('jumelage.jumelageAineEmail');
    }
}
