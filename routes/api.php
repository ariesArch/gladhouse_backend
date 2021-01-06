<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::ApiResource('cities', 'CityController');
Route::ApiResource('zones', 'ZoneController');
Route::ApiResource('branches', 'BranchController');
Route::ApiResource('roles', 'RoleController');
Route::ApiResource('items', 'ItemController');
// Route::get('zones/{zone}', 'ZoneController@show');
