<?php
namespace Liujun\LaravelRongcloud;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use RongCloud\RongCloud;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app->singleton(RongCloud::class, function ($app) {
            return new RongCloud(config('services.rongcloud.app_key'), config('services.rongcloud.app_secret'));
        });

        $this->app->alias(RongCloud::class, 'rongcloud');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [RongCloud::class, 'rongcloud'];
    }
}
