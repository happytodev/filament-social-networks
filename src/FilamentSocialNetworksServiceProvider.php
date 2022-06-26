<?php

namespace Happytodev\FilamentSocialNetworks;

use Filament\FilamentServiceProvider;
use Happytodev\FilamentSocialNetworks\Commands\FilamentSocialNetworksCommand;
use Spatie\LaravelPackageTools\Package;

class FilamentSocialNetworksServiceProvider extends FilamentServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-social-networks')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-social-networks_table')
            ->hasCommand(FilamentSocialNetworksCommand::class);
    }
}
