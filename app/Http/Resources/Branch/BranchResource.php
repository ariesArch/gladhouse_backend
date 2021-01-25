<?php

namespace App\Http\Resources\Branch;

use App\Http\Resources\City\CityResource;
use App\Http\Resources\Zone\ZoneResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'name_mm' => $this->name_mm,
            'city_id' => $this->city_id,
            'zone_id' => $this->zone_id,
            'description' => $this->description,
            'city' => CityResource::make($this->whenLoaded('city')),
            'zone' => ZoneResource::make($this->whenLoaded('zone'))
        ];
    }
    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function with($request)
    {
        return [
            'status' => 1,
        ];
    }
}
