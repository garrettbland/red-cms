<?php

namespace App\Observers;

use App\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class SettingsObserver
{
    /**
     * Handle the setting "created" event.
     *
     * @param  \App\Setting  $setting
     * @return void
     */
    public function created(Setting $setting)
    {
        //
        Log::debug('A setting was created');
    }

    /**
     * Handle the setting "updated" event.
     *
     * @param  \App\Setting  $setting
     * @return void
     */
    public function updated(Setting $setting)
    {
        // Forget the cache site.settings on update
        Log::debug('Cached cleared');
        Cache::forget('site.settings');
    }

    /**
     * Handle the setting "deleted" event.
     *
     * @param  \App\Setting  $setting
     * @return void
     */
    public function deleted(Setting $setting)
    {
        //
    }

    /**
     * Handle the setting "restored" event.
     *
     * @param  \App\Setting  $setting
     * @return void
     */
    public function restored(Setting $setting)
    {
        //
    }

    /**
     * Handle the setting "force deleted" event.
     *
     * @param  \App\Setting  $setting
     * @return void
     */
    public function forceDeleted(Setting $setting)
    {
        //
    }
}
