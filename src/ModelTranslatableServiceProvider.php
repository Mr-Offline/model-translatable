<?php

namespace ArsalanAhadian\ModelTranslatable;

use ArsalanAhadian\ModelTranslatable\Commands\ModelTranslatableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModelTranslatableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('modeltranslatable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_translations_table')
            ->hasCommand(ModelTranslatableCommand::class);
    }
}
