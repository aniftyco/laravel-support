<?php

namespace NiftyCo\Support;

use Carbon\CarbonImmutable;
use Illuminate\Support;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\URL;
use TailwindMerge\Contracts\TailwindMergeContract;
use TailwindMerge\TailwindMerge;

class ServiceProvider extends Support\ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register Tailwind Merge
        $this->app->singleton(TailwindMergeContract::class, function () {
            return TailwindMerge::instance();
        });
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
