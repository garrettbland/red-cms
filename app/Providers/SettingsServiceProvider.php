<?php

namespace App\Providers;
use App\Setting;

use App\Observers\SettingsObserver;
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
        //Register the Settings Observer for Red CMS
        Setting::observe(SettingsObserver::class);
    }

    /**
     * Register services. Saves to cache for 60 minutes
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('settings', function ($app) {
            return $app['cache']->remember('site.settings', 60, function () {
                return Setting::pluck('value', 'key')->toArray();
            });
        });
    }
}
