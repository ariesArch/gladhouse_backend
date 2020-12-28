<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function index()
    {
        $cities = City::with('zones')->get();
        return $cities;
    }
}
