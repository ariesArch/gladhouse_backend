<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = "staff";
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    
}
