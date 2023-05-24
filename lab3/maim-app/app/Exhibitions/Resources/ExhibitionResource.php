<?php

namespace App\Exhibitions\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExhibitionResource extends JsonResource
{
    public function toArray($request) : array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'theme' =>  $this->theme,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

