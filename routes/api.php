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
// Route::post('/v1/auth/login','Web\Api\v1\AuthController@login');
Route::group(['namespace'=>'Web\Api\v1','prefix'=>'v1'],function(){
    Route::ApiResource('cities', 'CityController');
    Route::ApiResource('zones', 'ZoneController');
    Route::ApiResource('branches', 'BranchController');
    Route::ApiResource('roles', 'RoleController');
    Route::ApiResource('items', 'ItemController');
    Route::ApiResource('staffs', 'StaffController');
    Route::ApiResource('departments', 'DepartmentController');
});
Route::group([
	'namespace'=>'Web\Api\v1',
	'middleware' => ['api', 'auth:api'],
	'prefix' => 'v1/auth'
], function () {
	Route::post('login', 'AuthController@login')->withoutMiddleware(['auth:api']);
	Route::post('logout', 'AuthController@logout');
	Route::post('refresh', 'AuthController@refresh')->withoutMiddleware(['auth:api']);
	Route::get('user', 'AuthController@me');
});
