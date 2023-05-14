<?php

namespace App\Exhibitions\Actions;

use Illuminate\HttpResources\Json\JsonResource;

class ExhibitionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'date' => $this->date,
            'city' => $this->city,
            'artist' => $this->artist,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
