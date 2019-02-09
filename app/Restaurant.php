<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
