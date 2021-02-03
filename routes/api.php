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


Route::group(['namespace' => 'Web\Api\v1','prefix' => 'v1/auth'], function () {
	Route::post('login', 'AuthController@login')->withoutMiddleware(['jwt.verify']);
});
Route::group(['namespace'=>'Web\Api\v1','prefix'=>'v1','middleware'=>['jwt.auth']],function(){
    Route::ApiResource('cities', 'CityController');
    Route::ApiResource('zones', 'ZoneController');
    Route::ApiResource('branches', 'BranchController');
    Route::ApiResource('roles', 'RoleController');
    Route::ApiResource('items', 'ItemController');
    Route::ApiResource('staffs', 'StaffController');
    Route::ApiResource('departments', 'DepartmentController');
});
// Route::group([
// 	'namespace'=>'Web\Api\v1',
// 	'middleware' => ['jwt.auth'],
// 	'prefix' => 'v1/auth'
// ], function () {
// 	Route::post('login', 'AuthController@login')->withoutMiddleware(['jwt.verify']);
// 	Route::post('logout', 'AuthController@logout');
// 	Route::post('refresh', 'AuthController@refresh')->withoutMiddleware(['jwt.verify']);
// 	Route::get('user', 'AuthController@me');
// });
