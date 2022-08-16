<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Contacts\Http\Controllers\ContactsController;

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

Route::middleware('auth:api')->get('/contacts', function (Request $request) {
    return $request->user();
});


Route::post('addcontact', [ContactsController::class, 'store']);