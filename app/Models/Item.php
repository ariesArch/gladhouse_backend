<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $casts = ['is_apply_special'=>'boolean'];
    protected $fillable = [
        'item_category_id','item_sub_category_id','name', 'name_mm','normal_price','special_price','normal_quantity','special_price','is_apply_special'
    ];
     public function item_category()
    {
        return $this->belongsTo(ItemCategory::class);
    }
    public function item_sub_category()
    {
        return $this->belongsTo(ItemSubCategory::class);
    }
}
