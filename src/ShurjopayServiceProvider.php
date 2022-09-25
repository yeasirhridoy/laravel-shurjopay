<?php

namespace Yahrdy\Shurjopay;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yahrdy\Shurjopay\Commands\ShurjopayCommand;

class ShurjopayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shurjopay')
            ->hasConfigFile()
            ->hasRoute('api')
            ->hasViews()
            ->hasMigration('create_shurjopay_table')
            ->hasCommand(ShurjopayCommand::class);
    }
}