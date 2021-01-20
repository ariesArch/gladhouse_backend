<?php

namespace App\Http\Resources\ItemSubCategory;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ItemCategory\ItemCategoryResource;

class ItemSubCategoryResource extends JsonResource
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
            'id' => $this->id,
            'name'=>$this->name,
            'name_mm'=>$this->name_mm,
            'is_discount'=>$this->is_discount,
            'descrioption'=>$this->description,
            'item_category_id'=>ItemCategoryResource::make($this->whenLoaded('item_category'))
        ];
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
