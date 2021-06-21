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

Route::get('/Boss7', function () {
    return view('/personnelBoss7');
});

Route::get('/SystemLanding', function () {
    return view('/systemLanding');
});

Route::get('/System1', function () {
    return view('/system1');
});

Route::get('/System2', function () {
    return view('/system2');
});

Route::get('/Logo', function () {
    return view('/Logo');
});

Route::get('/stock_data', function () 
{
    return view('/stock_data');
});

Route::get('/stock_person', function () 
{
    return view('/stock_person');
});

Route::get('/transaction_data', function () 
{
    return view('/transaction_data');
});

Route::get('transaction', function () 
{
    return view('/transaction');
});

Route::get('/stock_ceo_all_data', function () 
{
    return view('/stock_ceo_data');
});

Route::get('/stock_ceo_edit', function () 
{
    return view('/stock_ceo_edit');
});

Route::get('/stock_ceo_person_data', function () 
{
    return view('/stock_ceo_person_data');
});

Route::get('/stock_ceo_person_stock_data', function () 
{
    return view('/stock_ceo_person_stock_data');
});

Route::get('/stock_ceo_person_transaction_data', function () 
{
    return view('/stock_ceo_person_transaction_data');
});

Route::get('/stock_ceo_all_transaction_data', function () 
{
    return view('/stock_ceo_transaction_data');
});