<?php

namespace App\Http\Resources;

use App\Genre;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotographResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "https://admin.iwedding.kz/storage/users/photographs/";
        $genres = [];

        foreach ($this->genres as $item)
        {
            $genre = Genre::find($item->genre_id);
            array_push($genres, $genre->name);
        }

        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'phone' => $this->phone,
            'price' => $this->price,
            'genres' => $genres,
            'avatar' => $url . $this->avatar,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
