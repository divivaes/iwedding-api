<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $guarded = [];

    public function tag()
    {
        return $this->hasMany(Tag::class, 'tag_id');
    }
}
