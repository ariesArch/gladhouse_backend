<?php

namespace App\Http\Resources\Item;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'name_mm'=>$this->name_mm,
            'normal_quantity'=>$this->normal_quantity,
            'normal_price'=>$this->normal_price,
            'special_quantity'=>$this->special_quantity,
            'special_price'=>$this->special_price,
            'is_apply_special'=>$this->is_apply_special,
            'is_single_discount'=>$this->is_single_discount,
            'single_discount_percent'=>$this->single_discount_percent,
            'cover'=>$this->cover,
            'description'=>$this->description,
            'item_category'=>ItemCategoryResource::make($this->whenLoaded('item_category')),
            'item_sub_category'=>ItemSubCategoryResource::make($this->whenLoaded('item_sub_category'))

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
