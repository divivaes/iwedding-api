<?php

namespace App\Http\Resources;

use App\Tag;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "http://127.0.0.1:8001/storage/articles/";

        $tags = array();

        foreach ($this->news_tag as $item)
        {
            $tag = Tag::find($item->tag_id);
            array_push($tags, $tag->name);
        }

        return [
            'id' => $this->id,
            'author' => $this->user->name,
            'tags' => $tags,
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'views_count' => $this->views_count,
            'poster' => $url . $this->poster,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
