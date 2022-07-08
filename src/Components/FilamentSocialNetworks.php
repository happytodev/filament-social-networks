<?php

// namespace App\View\Components\Happytodev;

namespace Happytodev\FilamentSocialNetworks\Components;

use App\Models\SocialNetwork;
use Illuminate\View\Component;

class FilamentSocialNetworks extends Component
{
    public $socialNetworks;

    public $name;

    /**
     * Create a new component instance.
     *
     * @param string $name
     *
     * @return void
     */
    public function __construct($name = null)
    {
        // Check if a name of social network group is given
        // if YES return the corresponding social network group
        // if NO return the first active social network group
        // if none is active return null
        $whereClause = $name ? [['is_active', '=', 1], ['name', '=', $name]] : [['is_active', '=', 1]];

        $this->socialNetworks = SocialNetwork::where($whereClause)->first();
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
