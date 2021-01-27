<?php
namespace App\Repositories\Web\Api\v1;

use App\Repositories\BaseRepository;
use App\Models\City;

class CityRepository extends BaseRepository 
{
    public function model() {
        return City::class;
    }
    
}