<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decor extends Model
{
    protected $table = 'decors';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function genres()
    {
        return $this->hasMany(DecorGenre::class, 'decor_id');
    }
}
