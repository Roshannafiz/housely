<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        // Get Navbar / For Global
        view()->composer('*', function ($view) {
            $view->with('display_navbars', Navbar::where('status', '=', 1)->get());
        });

        // Get Footer / For Global
        view()->composer('*', function ($view) {
            $view->with('display_footers', Footer::where('status', '=', 1)->get());
        });

        // Get Social / For Global
        view()->composer('*', function ($view) {
            $view->with('display_socials', Social::where('status', '=', 1)->get());
        });

        // Pagination
        Paginator::useBootstrap();
    }
}
