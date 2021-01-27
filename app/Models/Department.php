<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
     protected $fillable = [
        'name', 'name_mm','description'
    ];
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
