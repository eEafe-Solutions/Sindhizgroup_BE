<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Locations\Http\Controllers\LocationController;

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

Route::middleware('auth:api')->get('/locations', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->post('addlocation', [LocationController::class, 'store']);
Route::middleware('auth:api')->get('Alllocations', [LocationController::class, 'index']);