<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Branch;
use App\City;
use App\Zone;
use App\Http\Controllers\Controller;
use App\Http\Requests\Branch\CreateBranchRequest;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::with('zone', 'city')->get();
        return $branches;
    }
    public function store(CreateBranchRequest $request)
    {
        $branch = new Branch;
        $branch->city_id = $request->city_id;
        $branch->zone_id = $request->zone_id;
        $branch->name_mm = $request->name_mm;
        $branch->name_en = $request->name_en;
        $branch->description = $request->description;
        return response()->json($branch);
    }
}
