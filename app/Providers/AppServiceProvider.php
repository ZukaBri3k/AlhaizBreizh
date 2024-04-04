<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $this->app['request']->server->set('HTTPS', $this->app->environment() !== 'local');

        //$this->app['request']->server->set('HTTPS', $this->app->environment() != 'local' ? 'on' : 'off');
        
        if ($this->app->environment() === 'production') {
            URL::forceScheme('https');
        }
        
    }
}
