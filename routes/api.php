<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\API\AccountSkinController;
use App\Http\Controllers\API\AccountAgentController;
use App\Http\Controllers\API\MahasiswaController;

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

Route::get('mahasiswa', [MahasiswaController::class , 'index']);
Route::post('mahasiswa/store', [MahasiswaController::class , 'store']);

Route::get('account', [AccountController::class , 'index']);
Route::post('account/store', [AccountController::class , 'store']);

Route::get('account/skin', [AccountSkinController::class , 'index']);
Route::get('account/skin/{id}', [AccountSkinController::class , 'show']);
Route::post('account/store', [AccountSkinController::class , 'store']);

Route::get('account/agent', [AccountAgentController::class , 'index']);
Route::get('account/agent/{id}', [AccountAgentController::class , 'show']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
