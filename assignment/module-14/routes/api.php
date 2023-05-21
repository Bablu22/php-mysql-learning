<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TestController::class)->group(function () {
    Route::get('/welcome', 'welcome');
    Route::post('/users', 'StoreUser');
    Route::get('/page', 'getPage');
    Route::get('/data', 'getData');
    Route::get('/token', 'remember_token');
    Route::post('/file', 'fileUpload');
    Route::post('/submit', 'submitData');
});
