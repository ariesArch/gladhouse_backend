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
}
