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

Route::get('/', 'SearchController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/item', 'ItemController@index')->name('item.index');
Route::get('/item/create', 'ItemController@create')->name('item.create');
Route::post('/item/store', 'ItemController@store')->name('item.store');
Route::get('/item/detail/{id}', 'ItemController@detail')->name('item.detail');
Route::get('/item/edit/{id}', 'ItemController@edit')->name('item.edit');
Route::post('/item/update/{id}', 'ItemController@update')->name('item.update');
Route::get('/item/importform', 'ItemController@importform')->name('item.importform');
Route::post('/item/import', 'ItemController@import')->name('item.import');
Route::get('/item/export', 'ItemController@export')->name('item.export');
Route::get('/search', 'SearchController@index')->name('search.index');
