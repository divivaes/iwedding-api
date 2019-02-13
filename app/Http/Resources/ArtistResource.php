<?php

namespace App\Http\Resources;

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
        $url = "http://127.0.0.1:8001/storage/users/artists/";
        $genres = [];
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'phone' => $this->phone,
            'duration' => $this->duration,
            'price' => $this->price,
            'genres' => $this->genres,
            'avatar' => $url . $this->avatar,
            'description' => $this->description,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
