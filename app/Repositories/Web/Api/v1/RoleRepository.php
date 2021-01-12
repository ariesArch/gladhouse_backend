<?php
namespace App\Repositories\Web\Api\v1;
use App\Repositories\BaseRepository;
use App\Models\Role;
class RoleRepository extends BaseRepository
    {
         public function model() {
        return Role::class;
    }
    }
