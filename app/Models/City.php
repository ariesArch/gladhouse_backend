<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $casts = ['is_available_d2d'=>'boolean'];
    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
