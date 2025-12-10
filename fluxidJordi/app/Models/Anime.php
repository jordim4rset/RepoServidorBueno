<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anime extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function characters(): belongsToMany
    {
        return $this->belongsToMany(Character::class);
    }

    public function studio(): belongsTo
    {
        return $this->belongsTo(Studio::class);
    }
}
