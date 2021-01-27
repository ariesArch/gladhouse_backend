<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zone\CreateZoneRequest;
use App\Http\Resources\Zone\ZoneCollection;
use App\Http\Resources\Zone\ZoneResource;
use Illuminate\Http\Request;
use App\Repositories\Web\Api\v1\ZoneRepository;

class ZoneController extends Controller
{
    protected $zoneRepo;
    public function __construct(ZoneRepository $zoneRepo)
    {
        $this->zoneRepo = $zoneRepo;
    }

    public function index()
    {
        $zones =  $this->zoneRepo->all();
        if (!$zones) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ZoneCollection($zones->load(['city']));
    }

    public function store(CreateZoneRequest $request)
    {
        $zone = $this->zoneRepo->create($request->all());
        if(!$zone) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ZoneResource($zone->load(['city']));
    }

    public function show($id) {
        $zone = $this->zoneRepo->findOrFail($id);
        if (!$zone) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ZoneResource($zone->load(['city']));
    }
    
}
