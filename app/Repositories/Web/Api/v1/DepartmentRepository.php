<?php
namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\Department;

class DepartmentRepository extends BaseRepository 
{
    public function model() {
        return Department::class;
    }
    
}