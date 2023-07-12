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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bagiannyh', 'App\Http\Controllers\bagiannyhsController@index');
Route::get('barangnyh', 'App\Http\Controllers\barangnyhController@index');
Route::get('pengeluarannyh', 'App\Http\Controllers\pengeluarannyhController@index');
Route::get('pengeluaranitemnyh', 'App\Http\Controllers\bpengeluaranitemnyhController@index');
Route::get('petugasnyh', 'App\Http\Controllers\petugasnyhController@index');
