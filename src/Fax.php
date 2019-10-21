<?php

namespace NotificationChannels\Faxir;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Mailable;

class Fax
{

    /** @var HttpClient HTTP Client */
    protected $http;

    /** @var Mailer
     * protected $mailer;
     *
     * /**
     * @param Mailer $mailer
     * @param HttpClient|null $httpClient
     */
    public function __construct($mailer = null, HttpClient $httpClient = null)
    {
        $this->mailer = $mailer;
        $this->http = $httpClient;
    }

    /**
     * @param FaxMessage $message
     */
    public function sendFax($message)
    {
        $mail = new FaxMail($message);
        return $mail->send($this->mailer);
    }
}