<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistGenre extends Model
{
    protected $table = 'artist_genres';
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

}
