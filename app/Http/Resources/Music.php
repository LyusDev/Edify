<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Music extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'title' => $this->music_title,
            'artist' => $this->music_artist,
            'album' => $this->music_album,
            'thumbnail' => $this->music_img,
            'path' => $this->music_path
        ];
    }
}
