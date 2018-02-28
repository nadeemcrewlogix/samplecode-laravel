<?php

namespace Origami\Page\Providers;

use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
     
        if (! $this->app->routesAreCached()) {       
            include __DIR__.'/../routes/admin/web.php';
        }
        
        $this->loadViewsFrom(__DIR__.'/../views', 'page');
        $publish_path = __DIR__.'/../' ;
        
        // $this->publishes([
        //     $publish_path.'views/admin'        => base_path('resources/views/vendor/slots/admin'),
        //     $publish_path.'database/migrations'   => $this->app->databasePath().'/migrations',
        //     $publish_path.'database/seeds'   => $this->app->databasePath().'/seeds',
        //     $publish_path.'config.php'   => config_path('crewlogix/slots.php'),
        // ],'configViewsMigrationSeeds');     
    }
    
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //       
    }
}