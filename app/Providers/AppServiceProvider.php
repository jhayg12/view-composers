<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Channels;
use App\Http\View\Composers\ChannelsComposer;

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
        // Option 1 all views
        // View::share('channels', Channels::all());

        // Option 2 wildcards
        // View::composer(['posts.*'], function ($view) {
        //     $view->with('channels', Channels::all());
        // });

        // Option 3 dedicated class
        View::composer(['posts.*'], ChannelsComposer::class);
    }
}
