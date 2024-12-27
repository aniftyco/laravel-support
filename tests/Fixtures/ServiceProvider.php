<?php

namespace Tests\Fixtures;

use Illuminate\Support;
use Illuminate\Support\Facades\Route;

class ServiceProvider extends Support\ServiceProvider
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
        Route::get('/', fn () => 'hello world');
    }
}
