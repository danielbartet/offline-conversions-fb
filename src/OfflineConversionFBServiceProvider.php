<?php 

namespace DanielBartet\OfflineConversionFB;


use Illuminate\Support\ServiceProvider;


class OfflineConversionFBServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
                __DIR__.'/config/offlineconversion.php' => config_path('offlineconversion.php')
        ], 'config');
    }

}
