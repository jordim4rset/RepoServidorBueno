<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Studio extends Model
{
    public function animes(): hasMany
    {
        return $this->hasMany(Anime::class);
    }
}
