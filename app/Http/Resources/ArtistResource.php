<?php

namespace App\Http\Resources;

use App\Genre;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "https://admin.iwedding.kz/storage/users/artists/";
        $genres = [];

        foreach ($this->genres as $item)
        {
            $genre = Genre::find($item->genre_id);
            array_push($genres, $genre->name);
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'phone' => $this->phone,
            'sort' => $this->sort,
            'duration' => $this->duration,
            'price' => $this->price,
            'genres' => $genres,
            'avatar' => $url . $this->avatar,
            'description' => $this->description,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
