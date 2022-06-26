<?php

namespace Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource;

class ListSocialNetworks extends ListRecords
{
    protected static string $resource = SocialNetworkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
