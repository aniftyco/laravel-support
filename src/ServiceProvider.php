<?php

namespace NiftyCo\Support;

use Carbon\CarbonImmutable;
use Illuminate\Support;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\URL;

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
        // Use CarbonImmutable by default
        Date::use(CarbonImmutable::class);

        // Force https
        URL::forceScheme('https');
    }
}
