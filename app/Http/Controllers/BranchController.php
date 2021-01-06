<?php

namespace App\Http\Controllers;

use App\Branch;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function index()
    {
        $branches = Branch::with(['city', 'zone'])->get();
        return $branches;
    }
    public function show(Branch $branches)
    {
        return $branches->load(['city', 'zone']);
          
    }
}
