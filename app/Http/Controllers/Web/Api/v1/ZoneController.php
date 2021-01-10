<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zone\CreateZoneRequest;
use App\Http\Resources\Zone\ZoneCollection;
use App\Http\Resources\Zone\ZoneResource;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Zone;

class ZoneController extends Controller
{
    public function index()
    {
        //fetch using with
        // $zones = Zone::with('city')->get();
        // return new ZoneCollection($zones);
        //only zones
        // $zones = Zone::all();
        // return new ZoneCollection($zones);
        // using load 
        $zones = Zone::all();
        return new ZoneCollection($zones->load(['city']));
    }
    public function store(CreateZoneRequest $request)
    {

        $zone = new Zone;
        $zone->city_id = $request->city_id;
        $zone->name_mm = $request->name_mm;
        $zone->name_en = $request->name_en;
        $zone->description = $request->description;
        return new ZoneResource($zone->load(['city']));
    }

    public function show(Zone $zone) {
        return new ZoneResource($zone->load(['city']));
    }
}
