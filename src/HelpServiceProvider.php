<?php

namespace AscentCreative\Help;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Routing\Router;

class HelpServiceProvider extends ServiceProvider
{
  public function register()
  {
    //

    // Register the helpers php file which includes convenience functions:
    // require_once (__DIR__.'/helpers.php');
   
    $this->mergeConfigFrom(
        __DIR__.'/../config/help.php', 'help'
    );

  }

  public function boot()
  {

    $this->loadViewsFrom(__DIR__.'/../resources/views', 'help');

    $this->loadRoutesFrom(__DIR__.'/../routes/help-web.php');

    $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    
  }

  

  // register the components
  public function bootComponents() {

  }




  

    public function bootPublishes() {

      $this->publishes([
        __DIR__.'/Assets' => public_path('vendor/ascentcreative/help'),
    
      ], 'public');

      $this->publishes([
        __DIR__.'/config/help.php' => config_path('help.php'),
      ]);

    }



}