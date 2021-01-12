<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Branch\CreateBranchRequest;
use App\Http\Requests\Branch\UpdateBranchRequest;
use App\Http\Resources\Branch\BranchCollection;
use App\Http\Resources\Branch\BranchResource;
use App\Repositories\Web\Api\v1\BranchRepository;

class BranchController extends Controller
{
    protected $branchRepo;
    public function __construct(BranchRepository $branchRepo)
    {
        $this->branchRepo = $branchRepo;
    }
    public function index()
    {
        $branches = $this->branchRepo->all();
        if (!$branches) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new BranchCollection($branches);
    }
    public function store(CreateBranchRequest $request)
    {
        $branches = $this->branchRepo->create($request->all());
        if (!$branches) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new BranchResource($branches);
    }
    public function show($id)
    {
        $branch = $this->branchRepo->find($id);
        if (!$branch) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new BranchResource($branch);
    }
    public function update($id, UpdateBranchRequest $request)
    {
        $branches = $this->branchRepo->update($id, $request->all());
        if (!$branches) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new BranchResource($branches);
    }
    public function destory($id)
    {
        $deleted = $this->branchRepo->delete->all($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1, 'message' => 'Branch was deleted'], Response::HTTP_OK);
    }
}
