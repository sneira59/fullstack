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


Route::resource('cliente','App\Http\Controllers\ClienteController');
Route::resource('items','App\Http\Controllers\ItemsController');
Route::get('factura', 'App\Http\Controllers\FacturaController@index')->name('factura.crear');
Route::get('fx/{f}', 'App\Http\Controllers\FacturaController@factura')->name('factura.resuelta');



