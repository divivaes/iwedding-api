<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
{
    protected $table = 'photographs';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function genres()
    {
        return $this->hasMany(PhotographGenre::class, 'photograph_id');
    }
}
