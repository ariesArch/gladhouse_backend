<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ItemSubCategory\CreateItemSubCategoryRequest;
use App\Http\Requests\ItemSubCategory\UpdateItemSubCategoryRequest;
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
        // $item_sub_categories =$this->itemsubRepo->all();
        // if(!$item_sub_categories){
        //     return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        // }
        // return new ItemSubCategoryCollection($item_sub_categories->load(['itemcategory']));
        $item_sub_categories =  $this->itemsubRepo->all();
        if (!$item_sub_categories) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryCollection($item_sub_categories->load(['item_category']));
    }
    public function store(CreateItemSubCategoryRequest $request)
    {
        $item_sub_category =$this->itemsubRepo->create($request->all());
        if(!$item_sub_category){
            return response() ->json(['error' => 'Someting went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryResource($item_sub_category->load(['item_category']));
    }

    public function show($id) {
        $item_sub_category= $this->itemsubRepo->find($id);
        if (!$item_sub_category) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryResource($item_sub_category->load(['item_category']));
    }
    public function update($id, UpdateItemSubCategoryRequest $request) {
        $item_sub_categories = $this->itemsubRepo->update($id,$request->all());
        if (!$item_sub_categories) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemSubCategoryResource($item_sub_category->load(['item_category']));
    }
    public function destroy($id) {
        $deleted = $this->itemsubRepo->delete($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1,'message'=>'ItemSubCategory was deleted'], Response::HTTP_OK);
    }


}
