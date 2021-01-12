<?php

use App\Http\Controllers\Web\Api\v1\ItemCategoryController;
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

// Route::get('zones/{zone}', 'ZoneController@show');
Route::post('/v1/auth/login', 'Web\Api\v1\AuthController@login');
Route::group(['namespace' => 'Web\Api\v1', 'prefix' => 'v1'], function () {
    Route::ApiResource('cities', 'CityController');
    Route::ApiResource('zones', 'ZoneController');
    Route::ApiResource('branches', 'BranchController');
    Route::ApiResource('roles', 'RoleController');
    Route::ApiResource('items', 'ItemController');
    Route::ApiResource('staffs', 'StaffController');
    Route::ApiResource('departments', 'DepartmentController');
<<<<<<< HEAD
    Route::ApiResource('itemsubcategories','ItemSubCategoryController');
});
=======
    Route::ApiResource('itemcategories', 'ItemCategoryController');
});
>>>>>>> 63c0b001137c7285023fee142628b1bc7f8f0b56
