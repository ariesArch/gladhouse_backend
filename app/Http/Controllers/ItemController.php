<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index()
    {
        $item = Item::all();
        return $item;
    }
}
