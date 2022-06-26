<?php

namespace App\Models;

use Orbit\Concerns\Orbital;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use Orbital;

    public static function schema(Blueprint $table)
    {
        $table->id();
        $table->string('name');
        $table->string('icon')->nullable();
        $table->string('url')->nullable();
        $table->boolean('is_active')->default(true);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'icon',
        'url',
        'is_active'
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
    ];



}
