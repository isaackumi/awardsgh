<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if (env(key,'APP_ENV') !== 'local') {
        //   URL::forceSheme(sheme,'https');
        // }

        if($this->app->environment('production')) {
    \URL::forceScheme('https');
            }
    }
}
