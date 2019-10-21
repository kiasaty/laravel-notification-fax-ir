<?php

namespace NotificationChannels\Faxir;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Mail\Mailer;
use Illuminate\Support\ServiceProvider;

class FaxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->when(FaxChannel::class)
            ->needs(Fax::class)
            ->give(function () {
                return new Fax(
                    app('mailer'),
                    new HttpClient()
                );
            });
    }

    /**
     * Register any package services.
     */
    public function register()
    {
    }
}