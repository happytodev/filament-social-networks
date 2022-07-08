<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class SocialNetwork extends Model
{
    use Orbital;

    public static function schema(Blueprint $table)
    {
        $table->id();
        $table->string('name');
        $table->boolean('is_active')->default(true);
        $table->json('social_network');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'is_active',
        'social_network',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'social_network' => 'array',
    ];
}
