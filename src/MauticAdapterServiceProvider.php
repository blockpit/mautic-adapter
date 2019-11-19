<?php

namespace blockpit\MauticAdapter;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;

/**
 * Class MauticAdapterServiceProvider
 * @package App\Providers
 */
class MauticAdapterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Add the Cors middleware to the router.
     *
     */
    public function boot()
    {
        $source = realpath($raw = __DIR__.'/../config/mauticconfig.php') ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('mauticconfig.php')]);
        }

        if ($this->app instanceof LaravelApplication && ! $this->app->configurationIsCached()) {
            $this->mergeConfigFrom($source, 'mauticconfig');
        }
    }



}
