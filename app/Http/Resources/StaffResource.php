<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url = "http://127.0.0.1:8001/storage/users/profile/";
        $role = [];
        return [
            'name' => $this->name,
            'role' => $this->role->name,
            'slug' => str_slug($this->name),
            'path' => $this->path,
            'avatar' => $url . $this->avatar,
            'email' => $this->email,
            'phone' => $this->phone,
            'role' => $this->role,
            'instagram_url' => $this->instagram_url,
            'facebook_url' => $this->facebook_url,
            'vkontakte_url' => $this->vkontakte_url
        ];
    }
}
