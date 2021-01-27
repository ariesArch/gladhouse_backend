<?php

namespace App\Http\Controllers\Web\Api\v1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\City\CreateCityRequest;
use App\Http\Requests\City\UpdateCityRequest;
use App\Http\Resources\City\CityCollection;
use App\Http\Resources\City\CityResource;
use App\Repositories\Web\Api\v1\CityRepository;
class CityController extends Controller
{
    protected $cityRepo;
    public function __construct(CityRepository $cityRepo) {
        $this->cityRepo = $cityRepo;
    }

    public function index()
    {
        $cities =  $this->cityRepo->all();
        if(!$cities) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new CityCollection($cities);
    }

    public function store(CreateCityRequest $request)
    {
        $city = $this->cityRepo->create($request->all());
        if (!$city) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new CityResource($city);
    }

    public function show($id) {
        $city = $this->cityRepo->find($id);
        if (!$city) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new CityResource($city);
    }

    public function update($id, UpdateCityRequest $request) {
        $city = $this->cityRepo->update($id,$request->all());
        if (!$city) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new CityResource($city);
    }

    public function destroy($id) {
        $deleted = $this->cityRepo->delete($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1,'message'=>'City was deleted'], Response::HTTP_OK);
    }
}
