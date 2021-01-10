<?php

namespace App\Http\Controllers\Web\Api\v1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Requests\City\CreateCityRequest;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return $cities;
    }

    public function store(CreateCityRequest $request)
    {
        $city = new City;
        $city->name_mm = $request->name_mm;
        $city->name_en = $request->name_en;
        $city->description = $request->description;
        $city->is_available_d2d = $request->is_available_d2d;
        return response()->json($city);
    }
}
