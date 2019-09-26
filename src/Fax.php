<?php


use GuzzleHttp\Client as HttpClient;

class Fax
{

    /** @var HttpClient HTTP Client */
    protected $http;

    /** @var null|string Telegram Bot API Token. */
    protected $token = null;

    /**
     * @param null $token
     * @param HttpClient|null $httpClient
     */
    public function __construct($token = null, HttpClient $httpClient = null)
    {
        $this->token = $token;

        $this->http = $httpClient;
    }
}