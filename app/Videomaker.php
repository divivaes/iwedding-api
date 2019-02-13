<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videomaker extends Model
{
    protected $table = 'videomakers';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function genres()
    {
        return $this->hasMany(VideomakerGenre::class, 'videomaker_id');
    }
}
