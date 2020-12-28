<?php

namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::with('city')->get();
        return $zones;
    }

    // public function show($id)
    // {
    //     $zone = Zone::with('city')->find($id);
    //     return $zone;
    // }
    public function show(Zone $zone)
    {
        return $zone->load('city');
    }
}
