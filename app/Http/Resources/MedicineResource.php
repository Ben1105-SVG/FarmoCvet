<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicineResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'image_path' => $this->image_path,
            'background_path' => $this->background_path,
            'instruction_path' => $this->instruction_path,
            'about_media_path' => $this->about_media_path,
            'about' => $this->about,
            'safety_and_quality' => $this->safety_and_quality,
            'created_at' => $this->created_at,
            'plants' => $this->resource->plants,
            'pharmo_agents' => $this->resource->pharmoAgents,
        ];
    }
}
