<?php

namespace GrsChannel\LaravelNotificationFaxir;

use Illuminate\Support\ServiceProvider;

class FaxirServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @todo check if there is no cleaner way
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FaxirChannel::class, function ($app) {
            return new FaxirChannel(app('mailer'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [FaxirChannel::class];
    }
}
