<?php

namespace Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource\Pages;

use Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialNetwork extends EditRecord
{
    protected static string $resource = SocialNetworkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
