<?php

namespace App\Providers;

use Illuminate\Auth\Passwords\PasswordResetServiceProvider as PassResetServiceProvider;
use App\Services\PasswordBrokerManager;

class PasswordResetServiceProvider extends PassResetServiceProvider {

    /**
     * Register the password broker instance.
     *
     * @return void
     */
    protected function registerPasswordBroker()
    {
        $this->app->singleton('auth.password', function ($app) {
            return new PasswordBrokerManager($app);
        });

        $this->app->bind('auth.password.broker', function ($app) {
            return $app->make('auth.password')->broker();
        });
    }
}
