<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
     public function item_category()
    {
        return $this->belongsTo(ItemCategory::class);
    }
    public function item_sub_category()
    {
        return $this->belongsTo(ItemSubCategory::class);
    }
}
