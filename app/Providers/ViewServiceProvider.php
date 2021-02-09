<?php

namespace App\Providers;

use App\Http\View\Composers\ViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using class based composers...
        // View::composer(['index','layouts._head'], ViewComposer::class);

        // Using closure based composers...
        // View::composer('dashboard', function ($view) {
        //     //
        // });
    }
}