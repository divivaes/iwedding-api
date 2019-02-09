<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function news_tag()
    {
        return $this->hasMany(NewsTag::class, 'article_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
