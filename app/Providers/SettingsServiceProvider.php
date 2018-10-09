<?php

namespace App\Providers;
use App\Setting;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('settings', function ($app) {
            return $app['cache']->remember('site.settings', 0, function () {
                return Setting::pluck('value', 'key')->toArray();
            });
        });
    }
}
