<?php

use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\ServiceProvider;

class FaxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->when(FaxChannel::class)
            ->give(function () {
                return new Telegram(
                    config('services.telegram-bot-api.token'),
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