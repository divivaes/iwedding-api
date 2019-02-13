<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotographGenre extends Model
{
    protected $table = 'photograph_genres';
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function photograph()
    {
        return $this->belongsTo(Photograph::class);
    }
}
