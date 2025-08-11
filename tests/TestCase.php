<?php

namespace XMultibyte\BladeFormatter\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use XMultibyte\BladeFormatter\BladeFormatterServiceProvider;

/**
 * Base test case for the Blade Formatter package.
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
        return [BladeFormatterServiceProvider::class];
    }
}
