<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemSubCategory extends Model
{
    use SoftDeletes;
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
