<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class createQuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->mailData = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
<<<<<<< Updated upstream
        return $this->markdown('emails.createQuotations')->with('mailData', $this->mailData);
=======
        return $this->view('emails.createQuotations');
>>>>>>> Stashed changes
    }
}
