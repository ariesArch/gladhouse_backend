<?php

namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\ItemSubCategory;

class ItemSubCategoryRepository extends BaseRepository
{
    public function model()
    {
        return ItemSubCategory::class;
    }
}