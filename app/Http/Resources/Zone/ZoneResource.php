<?php

namespace App\Http\Resources\Zone;

use App\Http\Resources\City\CityResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'name_mm'=>$this->name_mm,
            'city_id'=>$this->city_id,
            'is_deliver'=>$this->is_deliver,
            'city'=>CityResource::make($this->whenLoaded('city'))
        ];
        // return parent::toArray($request);
    }
    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'status' => 1,
        ];
    }
}
