<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
