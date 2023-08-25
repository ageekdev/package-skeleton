<?php

namespace Ageekdev\:package_namespace\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ageekdev\:package_namespace\:package_name
 */
class PackageName extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ':package_name';
    }
}
