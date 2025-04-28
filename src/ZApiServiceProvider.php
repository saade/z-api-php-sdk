<?php

namespace Saade\ZApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Saade\ZApi\Commands\ZApiCommand;

class ZApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('z-api-php-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_z_api_php_sdk_table')
            ->hasCommand(ZApiCommand::class);
    }
}
