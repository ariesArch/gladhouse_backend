<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'city_id', 'zone_id', 'name', 'name_mm', 'description'
    ];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
