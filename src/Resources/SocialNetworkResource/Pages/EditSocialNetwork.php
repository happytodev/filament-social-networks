<?php

namespace Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource;

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
