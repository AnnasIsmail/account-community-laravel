<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Helpers\ApiFormatter;
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

Route::get('/coba', function () {
    return ApiFormatter::createApi(200, 'success', [1,2,3]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
