<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DecorGenre extends Model
{
    protected $table = 'decor_genres';
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function decor()
    {
        return $this->belongsTo(Decor::class);
    }
}
