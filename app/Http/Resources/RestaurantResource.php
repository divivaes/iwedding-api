<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "http://127.0.0.1:8001/storage/restaurants/";

        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'address' => $this->address,
            'phone' => $this->phone,
            'description' => $this->description,
            'space' => $this->space,
            'price' => $this->price,
            'poster' => $url . $this->poster,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
