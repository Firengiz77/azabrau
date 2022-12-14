<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Sales_Point;
use Illuminate\Support\Facades\View;

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
        $maps= Sales_Point::get();
        View::share('maps', $maps);
    }
}
