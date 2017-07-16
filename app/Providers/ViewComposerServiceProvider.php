<?php

namespace App\Providers;
use App\Brand;

use App\Category;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       /*view()->composer('Boot.layouts.nav',function($view)
       {
           $view->with('latest', Category::latest()->first());
       });*/
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
