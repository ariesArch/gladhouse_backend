<?php

namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\Branch;

class BranchRepository extends BaseRepository
{
    public function model()
    {
        return Branch::class;
    }
}
