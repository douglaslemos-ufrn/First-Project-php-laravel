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

Route::get('/','MusicaController@index')->name('index');
Route::get('/cadastrar','MusicaController@create')->name('cadastrar');
Route::post('/salvar','MusicaController@store')->name('salvar');
Route::get('/delete/{id}','MusicaController@delete')->name('delete');
Route::get('/edit/{id}','MusicaController@edit')->name('edit');
Route::post('/Atualizar/{id}','MusicaController@Atualizar')->name('update');