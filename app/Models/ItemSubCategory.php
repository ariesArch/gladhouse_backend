<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemSubCategory extends Model
{
    use SoftDeletes;
    protected $casts = ['is_discount'=>'boolean'];
    protected $fillable = [
        'name', 'name_mm','description'
    ];
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
    public function item_category()
    {
        return $this->belongsTo(ItemCategory::class);
    }
}
