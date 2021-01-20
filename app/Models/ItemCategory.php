<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemCategory extends Model
{
    use SoftDeletes;
    public function item_sub_categories()
    {
        return $this->hasMany(ItemSubCategory::class);
    }
}
