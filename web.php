<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('barang','BarangController@index')->name('barang.index');
Route::get('barang/create', 'BarangController@create')->name('barang.create');
Route::post('barang', 'BarangController@store')->name('barang.store');
Route::get  ('barang/{id}/detail', 'BarangController@show')->name('barang.show');
Route::get('barang/{id}/edit', 'BarangController@edit')->name('barang.edit');
Route::post('barang/{id}', 'BarangController@update')->name('barang.update');
Route::delete('barang/delete/{id}', 'BarangController@destroy')->name('barang.destroy');