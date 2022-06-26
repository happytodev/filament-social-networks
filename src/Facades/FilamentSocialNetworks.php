<?php

namespace Happytodev\FilamentSocialNetworks\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Happytodev\FilamentSocialNetworks\FilamentSocialNetworks
 */
class FilamentSocialNetworks extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-social-networks';
    }
}
