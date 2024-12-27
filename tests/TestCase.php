<?php

namespace Tests;

use NiftyCo\Support\ServiceProvider;
use Orchestra\Testbench;

abstract class TestCase extends Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [Fixtures\ServiceProvider::class, ServiceProvider::class];
    }
}
