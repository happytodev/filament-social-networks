<?php

namespace Happytodev\FilamentSocialNetworks;

// use App\View\Components\Happytodev\FilamentSocialNetworks;
use Filament\PluginServiceProvider;
use Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource;
use Happytodev\FilamentSocialNetworks\Components\FilamentSocialNetworks;
use Happytodev\FilamentSocialNetworks\Commands\FilamentSocialNetworksCommand;
use Spatie\LaravelPackageTools\Package;

//use Happytodev\FilamentSocialNetworks\FilamentSocialNetworks as FilamentSocialNetworksFilamentSocialNetworks;

class FilamentSocialNetworksServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        SocialNetworkResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-social-networks')
            ->hasAssets()
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents('happytodev', FilamentSocialNetworks::class)
            ->hasMigration('create_filament-social-networks_table')
            ->hasCommand(FilamentSocialNetworksCommand::class);
    }
}
