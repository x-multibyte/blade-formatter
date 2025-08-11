<?php

namespace XMultibyte\BladeFormatter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed something()
 * @see \XMultibyte\BladeFormatter\BladeFormatter
 */
class BladeFormatter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'blade-formatter';
    }
}
