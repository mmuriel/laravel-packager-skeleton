<?php

namespace :uc:vendor\:uc:package\Providers;

use Illuminate\Support\ServiceProvider;

class :uc:packageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', ':lc:package');

        $this->publishes([
            __DIR__ . '/../../publishable/assets' => public_path(':lc:package/assets'),
        ], 'public');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', ':lc:package');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(__DIR__.'../../config/:lc:package.php', ':lc:package');

        // Register the service the package provides.
        $this->app->singleton(':lc:package', function ($app) {
            return new :uc:package;
        });    
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:package'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/:lc:package.php' => config_path(':lc:package.php'),
        ], ':lc:package.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/:lc:vendor'),
        ], ':lc:package.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/:lc:vendor'),
        ], ':lc:package.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}