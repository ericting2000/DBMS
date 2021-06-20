<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Landing', function () {
    return view('/Landing');
});

Route::get('/Staff1', function () {
    return view('/personnelStaff1');
});

Route::get('/Staff2', function () {
    return view('/personnelStaff2');
});

Route::get('/Staff3', function () {
    return view('/personnelStaff3');
});

Route::get('/Boss1', function () {
    return view('/personnelBoss1');
});

Route::get('/Boss2', function () {
    return view('/personnelBoss2');
});

Route::get('/Boss3', function () {
    return view('/personnelBoss3');
});

Route::get('/Boss4', function () {
    return view('/personnelBoss4');
});

Route::get('/Boss5', function () {
    return view('/personnelBoss5');
});

Route::get('/Boss6', function () {
    return view('/personnelBoss6');
});

Route::get('/Logo', function () {
    return view('/Logo');
});
