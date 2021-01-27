<?php

namespace App\Http\Controllers\Web\Api\v1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Department;
use App\Http\Requests\Department\CreateDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use App\Http\Resources\Department\DepartmentCollection;
use App\Http\Resources\Department\DepartmentResource;
use App\Repositories\Web\Api\v1\DepartmentRepository;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $departmentRepo;
    public function __construct(DepartmentRepository $departmentRepo) {
        $this->departmentRepo = $departmentRepo;
    }
    public function index()
    {
        $departments=  $this->departmentRepo->all();
        if(!$departments) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new DepartmentCollection($departments);
    }

    public function store(CreateDepartmentRequest $request)
    {
        $department = $this->departmentRepo->create($request->all());
        if (!$department) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new DepartmentResource($department);
    }

    public function show($id)
    {
        $department = $this->departmentRepo->find($id);
        if (!$department) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new DepartmentResource($department);
    }
     public function update($id, UpdateDepartmentRequest $request) {
        $department = $this->departmentRepo->update($id,$request->all());
        if (!$department) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new DepartmentResource($department);
    }

    public function destroy($id) {
        $deleted = $this->departmentRepo->delete($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1,'message'=>'City was deleted'], Response::HTTP_OK);
    }
}
