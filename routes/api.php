<?php

use App\Http\Controllers\TestApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [TestApiController::class, 'index']);
Route::get('/create', [TestApiController::class, 'create']);
Route::post('/store', [TestApiController::class, 'store']);
Route::get('/show/{id}', [TestApiController::class, 'show']);
Route::put('/update/{id}', [TestApiController::class, 'update']);
Route::delete('/delete/{id}', [TestApiController::class, 'delete']);
