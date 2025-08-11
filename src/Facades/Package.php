<?php

namespace XMultibyte\LaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Package extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'package';
    }
}
