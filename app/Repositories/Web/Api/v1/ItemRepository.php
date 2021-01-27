<?php
namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\Item;

class ItemRepository extends BaseRepository 
{
    public function model() {
        return Item::class;
    }
    
}