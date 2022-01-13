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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('sede', App\Http\Controllers\Sede\sedeController::class);
Route::resource('ubigeo', App\Http\Controllers\Sede\ubigeoController::class);
Route::resource('sedeDestino', App\Http\Controllers\Sede\sedeDestinoController::class);

//Route::resource('sede', App\Http\Controllers\Sede\sedeController::class)->only(['index','store','show','update','destroy']);