<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemCategory extends Model
{
    use SoftDeletes;
    // protected $table = 'item_categories';
    protected $fillable = [
        'name', 'name_mm', 'description'
    ];
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function itemsubcategories()
    {
        return $this->hasMany(ItemSubCategory::class);
    }
}
