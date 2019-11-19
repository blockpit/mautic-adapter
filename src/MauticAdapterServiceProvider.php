<?php

namespace blockpit\MauticAdapter;

use Illuminate\Support\ServiceProvider;

/**
 * Class MauticAdapterServiceProvider
 * @package App\Providers
 */
class MauticAdapterServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = __DIR__.'/../config/mauticconfig.php';

        $this->publishes([
            $source => config_path('mauticconfig.php'),
        ]);

        $this->mergeConfigFrom(
            $source, 'mauticconfig'
        );
    }

}
