<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Session;
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
    public function boot(): void
    {
        // RedirectIfAuthenticated::redirectUsing(function(){
        //     return route('dashboard.home');
        // });

        Authenticate::redirectUsing(function(){
            Session::flash('errorResponse' , 'you must be logged in');
            return route('dashboard.login');
        });
}
}
