<?php

namespace Saade\ZApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saade\ZApi\ZApi
 */
class ZApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Saade\ZApi\ZApi::class;
    }
}
