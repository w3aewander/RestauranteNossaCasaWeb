<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RestauranteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::share('app_name','Restaurante Nossa Casa');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
