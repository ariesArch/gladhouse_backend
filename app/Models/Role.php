<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $casts = ['is_available_d2d'=>'boolean'];
    protected $fillable = [
        'name', 'name_mm','is_available_d2d','description'
    ];
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }  
}
