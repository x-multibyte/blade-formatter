<?php

namespace XMultibyte\LaravelPackage\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use XMultibyte\LaravelPackage\PackageServiceProvider;

/**
 * Base test case for the package.
 */
abstract class TestCase extends OrchestraTestCase
{
    /**
     * Get package providers for the application.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [PackageServiceProvider::class];
    }
}
