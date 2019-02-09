<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "http://127.0.0.1:8001/storage/gallery/";

        return [
            'photo_url' => $url . $this->photo_url,
            'photo_name' => $this->photo_name,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}