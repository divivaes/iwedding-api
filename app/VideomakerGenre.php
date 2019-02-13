<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideomakerGenre extends Model
{
    protected $table = 'videomaker_genres';
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function videomaker()
    {
        return $this->belongsTo(Videomaker::class);
    }
}
