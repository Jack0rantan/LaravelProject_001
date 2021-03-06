<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Service
use App\Services\BlogService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->bindRepository();
    }

    public function bindRepository()
    {
      $this->app->bind(BlogService::class, function(){
          return new BlogService;
      });
    }
}
