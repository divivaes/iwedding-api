<?php

namespace App\Http\Resources;

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
        $url = "http://127.0.0.1:8001/storage/users/photographs/";

        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'phone' => $this->slug,
            'price' => $this->price,
            'types' => $this->types,
            'avatar' => $url . $this->avatar,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
