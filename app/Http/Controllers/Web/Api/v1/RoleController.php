<?php

namespace App\Http\Controllers\Web\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\CreateRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Http\Resources\Role\RoleCollection;
use App\Http\Resources\Role\RoleResource;
use App\Repositories\Web\Api\v1\RoleRepository;

class RoleController extends Controller
{
    protected $roleRepo;
    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }
    public function index()
    {
        $roles = $this->roleRepo->all();
        if (!$roles) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new RoleCollection($roles);
    }
    public function store(CreateRoleRequest $request)
    {
        $roles = $this->roleRepo->create($request->all());
        if (!$roles) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new RoleResource($roles);
    }
    public function show($id)
    {
        $role = $this->roleRepo->find($id);
        if (!$role) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new RoleResource($role);
    }
    public function update($id, UpdateRoleRequest $request)
    {
        $roles = $this->roleRepo->update($id, $request->all());
        if (!$roles) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return new RoleResource($roles);
    }
    public function destory($id)
    {
        $deleted = $this->roleRepo->delete->all($id);
        if (!$deleted) {
            return response()->json(['error' => 'Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['status' => 1, 'message' => 'Role was deleted'], Response::HTTP_OK);
    }
}
