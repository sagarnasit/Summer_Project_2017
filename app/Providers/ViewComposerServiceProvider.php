<?php

namespace App\Providers;
use App\Category;
use App\Brand;

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
      view()->composer('Boot.layouts.nav',function($view){
        $view->with([
          'categories'=>Category::all(),
          'brands'=>Brand::all(),
        ]);
      });
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
