<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ItemSubCategory\CreateCityRequest;
use App\Http\Requests\ItemSubCategory\UpdateCityRequest;
use App\Http\Resources\ItemSubCategory\ItemSubCategoryCollection;
use App\Http\Resources\ItemSubCategory\ItemSubCategoryResource;
use App\Repositories\Web\Api\v1\ItemSubCategoryRepository;

class ItemSubCategoryController extends Controller
{
    //
    protected $itemsubRepo;
    public function __construct(ItemSubCategoryRepository $itemsubRepo)
    {
        $this->itemsubRepo = $itemsubRepo;
    }
    public function index()
    {
        $itemsub =$this->itemsubRepo->all();
        if(!$itemsub){
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryCollection($itemsub);
    }
    public function store(CreateItemSubCategoryRequest $REQUEST)
    {
        $itemsub =$this->itemsubRepo->all();
        if(!$itemsub){
            return response() ->json(['error' => 'Someting went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryResource($itemsub);
    }
    public function show($id) {
        $itemsub = $this->itemsubRepo->find($id);
        if (!$itemsub) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryResource($itemsub);
    }
    public function update($id, UpdateCityRequest $request) {
        $itemsub = $this->itemsubRepo->update($id,$request->all());
        if (!$itemsub) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryResource($itemsub);
    }
    public function destroy($id) {
        $deleted = $this->itemsubRepo->delete($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1,'message'=>'ItemSubCategory was deleted'], Response::HTTP_OK);
    }


}
