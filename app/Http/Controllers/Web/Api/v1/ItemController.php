<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\CreateItemRequest;
use App\Http\Resources\Item\ItemCollection;
use App\Http\Resources\Item\ItemResource;
use Illuminate\Http\Request;
use App\Repositories\Web\Api\v1\ItemRepository;

class ItemController extends Controller
{
    protected $itemRepo;
    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepo = $itemRepo;
    }

    public function index()
    {
        $items =  $this->itemRepo->all();
        if (!$items) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemCollection($items->load(['item_category','item_sub_category']));
    }

    public function store(CreateItemRequest $request)
    {
        $item = $this->itemRepo->create($request->all());
        if(!$item) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemResource($item->load(['item_category','item_sub_category']));
    }

    public function show($id) {
        $item = $this->itemRepo->findOrFail($id);
        if (!$item) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new ItemResource($item->load(['item_category','item_sub_category']));
    }
    
}