<?php

namespace App\Http\Controllers;
use App\ItemCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    function index()
    {
        $itemcategories = ItemCategory::all();
        return $itemcategories;
    }
}
