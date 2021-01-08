<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
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
