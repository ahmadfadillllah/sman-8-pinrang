<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
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

// group middleware
Route::get('/chat', [MessageController::class, 'show']);
Route::post('/chat', [MessageController::class, 'store']);
Route::put('/chat', [MessageController::class, 'update']);

// create rooms
Route::post('/rooms', [RoomController::class, 'store']);
