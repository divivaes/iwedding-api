<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideomakerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "http://127.0.0.1:8001/storage/users/videomakers/";

        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'phone' => $this->phone,
            'price' => $this->price,
            'types' => $this->types,
            'device' => $this->device,
            'avatar' => $url . $this->avatar,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
