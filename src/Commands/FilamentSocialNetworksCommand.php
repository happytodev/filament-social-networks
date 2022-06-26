<?php

namespace Happytodev\FilamentSocialNetworks\Commands;

use Illuminate\Console\Command;

class FilamentSocialNetworksCommand extends Command
{
    public $signature = 'filament-social-networks';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
