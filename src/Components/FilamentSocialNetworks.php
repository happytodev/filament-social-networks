<?php

// namespace App\View\Components\Happytodev;

namespace Happytodev\FilamentSocialNetworks\Components;

use App\Models\SocialNetwork;
use Illuminate\View\Component;

class FilamentSocialNetworks extends Component
{
    public $socialNetworks;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        // Get only active social network
        $this->socialNetworks = SocialNetwork::where('is_active', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('filament-social-networks::components.happytodev.filament-social-networks');
    }
}
