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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//取得個人資料
Route::post('/getUserInfo','App\Http\Controllers\StockHolderController@getIndividualInfo');

//股東資料總覽
Route::post('/getStockHolderInfo','App\Http\Controllers\StockHolderController@getStockHolderInfo');

