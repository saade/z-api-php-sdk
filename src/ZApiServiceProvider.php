<?php

namespace Saade\ZApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Saade\ZApi\Commands\ZApiCommand;

class ZApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('z-api')
            ->hasConfigFile();
    }
}
