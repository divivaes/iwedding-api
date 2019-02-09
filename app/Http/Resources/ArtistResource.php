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

        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'phone' => $this->phone,
            'genre' => $this->genre,
            'duration' => $this->duration,
            'price' => $this->price,
            'avatar' => $url . $this->avatar,
            'description' => $this->description,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
