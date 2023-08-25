<?php

namespace Ageekdev\:package_namespace\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Ageekdev\:package_namespace\:package_nameServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            :package_nameServiceProvider::class,
        ];
    }
}
