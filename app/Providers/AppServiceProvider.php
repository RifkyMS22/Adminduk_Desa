<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // View Composer for Navbar
        View::composer('layouts.navbar', function ($view) {
            $isAdmin = auth()->check() ? auth()->user()->isAdmin() : false;
            $view->with('isAdmin', $isAdmin);
        });
    }
}
