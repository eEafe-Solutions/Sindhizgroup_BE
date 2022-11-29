<?php



use Illuminate\Http\Request;
use Modules\Users\Http\Controllers\AuthController;
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

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});


Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('profile', [AuthController::class, 'profile']);
Route::middleware('auth:api')->get('logout', [AuthController::class, 'logout']);


