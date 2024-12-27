<?php

namespace NiftyCo\Support;

use AaronFrancis\Solo\Facades\Solo;
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
        // Setup Solo to use config
        Solo::useTheme(config('solo.theme', 'dark'))
            ->addCommands(config('solo.commands', []))
            ->addLazyCommands(config('solo.lazyCommands', []));
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
