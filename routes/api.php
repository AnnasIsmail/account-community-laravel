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
Route::get('account/{id}', [AccountController::class , 'show']);
Route::post('account/store', [AccountController::class , 'store']);
Route::post('account/update/{id}', [AccountController::class , 'update']);
Route::post('account/delete/{id}', [AccountController::class , 'destroy']);

Route::get('skin', [AccountSkinController::class , 'index']);
Route::post('skin/store', [AccountSkinController::class , 'store']);
Route::get('skin/{id}', [AccountSkinController::class , 'show']);
Route::post('skin/delete/{account_id}', [AccountSkinController::class , 'destroy']);

Route::get('agent', [AccountAgentController::class , 'index']);
Route::post('agent/store', [AccountAgentController::class , 'store']);
Route::get('agent/{id}', [AccountAgentController::class , 'show']);
Route::post('agent/delete/{account_id}', [AccountAgentController::class , 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
