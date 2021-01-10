<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zone\CreateZoneRequest;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Zone;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::with('city')->get();
        return $zones;
    }
    public function store(CreateZoneRequest $request)
    {

        $zone = new Zone;
        $zone->city_id = $request->city_id;
        $zone->name_mm = $request->name_mm;
        $zone->name_en = $request->name_en;
        $zone->description = $request->description;
        return response()->json($zone);
    }
}
