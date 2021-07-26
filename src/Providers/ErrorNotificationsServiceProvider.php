<?php


namespace Providers;


use Illuminate\Support\ServiceProvider;

class ErrorNotificationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
    }

    private function mergeConfig()
    {
        $path = $this->getConfigPath();
        $this->mergeConfigFrom($path, 'errorNotificationManager');
    }

    private function publishConfig()
    {
        $path = $this->getConfigPath();
        $this->publishes([$path => config_path('errorNotificationManager.php')], 'config');
    }

    private function getConfigPath()
    {
        return __DIR__ . '/../Config/errorNotificationManager.php';
    }
}
