<?php

namespace App\Models;
// use Http\Models\Item Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemSubCategory extends Model
{
    use SoftDeletes;
    protected $fillable=[
       'item_category_id', 'name','name_mm','description'
    ];
    public function item_category()
    {
        return $this->belongsTo(ItemCategory::class);
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
