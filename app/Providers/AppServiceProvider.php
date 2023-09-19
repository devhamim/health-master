<?php

namespace App\Providers;

use App\Models\FooterDetail;
use App\Models\WebsiteLinks;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;

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
        //
        Paginator::useBootstrap();
        View::composer('*',function ($view){
           $view->with('links',WebsiteLinks::latest()->first());
        });
        View::composer('frontend.includes.footer',function ($view){
            $view->with('footer',FooterDetail::latest()->first());
        });

    }
}
