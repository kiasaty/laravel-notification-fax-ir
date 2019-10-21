<?php

namespace NotificationChannels\Faxir;

use Illuminate\Mail\Mailable;

class FaxMail extends Mailable
{
    /** @var FaxMessage */
    private $message;

    /**
     * FaxMail constructor.
     * @param FaxMessage $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('faxes.voucher')
//            ->from($this->message->getFrom())
            ->to($this->message->getTo())
            ->attach($this->message->getFile());
    }
}