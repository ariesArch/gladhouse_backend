<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ItemCategory\ItemCategoryCollection;
use App\Http\Resources\ItemCategory\ItemCategoryResource;
use App\Http\Requests\ItemCategory\CreateItemCategoryRequest;
use App\Http\Requests\ItemCategory\UpdateItemCategoryRequest;
use App\Repositories\Web\Api\v1\ItemCategoryRepository;

class ItemCategoryController extends Controller
{
    protected $itemCategoryRepo;
    public function __construct(ItemCategoryRepository $itemCategoryRepo)
    {
        $this->itemCategoryRepo = $itemCategoryRepo;
    }
    public function index()
    {
        $itemcategories = $this->itemCategoryRepo->all();
        if (!$itemcategories) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemCategoryCollection($itemcategories);
    }
    public function store(CreateItemCategoryRequest $request)
    {
        $itemcategory = $this->itemCategoryRepo->create($request->all());
        if (!$itemcategory) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemCategoryResource($itemcategory);
    }
    public function show($id)
    {
        $itemcategory = $this->itemCategoryRepo->find($id);
        if (!$itemcategory) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemCategoryResource($itemcategory);
    }
    public function update($id, UpdateItemCategoryRequest $request)
    {
        $itemcategory = $this->itemCategoryRepo->update($id, $request->all());
        if (!$itemcategory) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemCategoryResource($itemcategory);
    }
    public function destroy($id)
    {
        $deleted = $this->itemCategoryRepo->delete($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1, 'message' => 'Item_Category was deleted'], Response::HTTP_OK);
    }
}
