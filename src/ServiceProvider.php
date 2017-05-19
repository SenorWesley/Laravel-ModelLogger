<?php

namespace SenorWesley\ModelLogger;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        require_once('helpers.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\CleanLogsCommand::class,
            ]);
        }
    }
}
