<?php

namespace App\Providers;

use App\Models\Banner;
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
        $this->app->singleton('banners', function () {
           return Banner::where('active', true)->limit(3)->get();
        });
    }
}
