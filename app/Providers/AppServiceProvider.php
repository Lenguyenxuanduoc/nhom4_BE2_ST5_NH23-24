<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

          // Currently existing count for posts
          $postCount = DB::table('posts')->count();
          view()->share('postCount', $postCount);
  
          // Get the count of cars from the 'cars' table
          $carCount = DB::table('cars')->count();
          view()->share('carCount', $carCount);
  
          // Get the count of users from the 'users' table
          $userCount = DB::table('users')->count();
          view()->share('userCount', $userCount);
    }
}
