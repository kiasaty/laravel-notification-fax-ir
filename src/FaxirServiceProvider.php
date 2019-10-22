<?php

namespace GrsChannel\LaravelNotificationFaxir;

use Illuminate\Support\ServiceProvider;

class FaxirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->when(FaxirChannel::class)
            ->give(app('mailer'));
    }

    /**
     * Register any package services.
     */
    public function register()
    {
    }
}
