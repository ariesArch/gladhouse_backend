<?php

namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\Zone;

class ZoneRepository extends BaseRepository
{
    public function model()
    {
        return Zone::class;
    }
}
