<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\LoginController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login',[LoginController::class,'login']);
Route::delete('logout',[LoginController::class,'logout']);
Route::get('/user', 'App\Http\Controllers\DashboardController@Coingeko');
Route::get('/test', 'App\Http\Controllers\CoinGeckoController@testN');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/cryptlist','App\Http\Controllers\DashboardController@cryptlist');
});
