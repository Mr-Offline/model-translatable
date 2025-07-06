<?php

namespace ArsalanAhadian\ModelTranslatable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ArsalanAhadian\ModelTranslatable\Commands\ModelTranslatableCommand;

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
