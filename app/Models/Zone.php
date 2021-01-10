<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use SoftDeletes;
    //belongsTo City
    public function city()
    {
        return $this->belongsTo(City::class);
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
