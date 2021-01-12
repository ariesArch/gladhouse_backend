<?php

namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\ItemCategory;

class ItemCategoryRepository extends BaseRepository
{
    public function model()
    {
        return ItemCategory::class;
    }
}
