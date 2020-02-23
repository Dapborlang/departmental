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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('formpopulate','FormPopulateController');
Route::get('formpopulateall','FormPopulateController@resources');
Route::resource('formpopulateindex','FormPopulateIndexController');

Route::get('formbuilder/{id}','FormBuilderController@index');
Route::get('formbuilder/{id}/create','FormBuilderController@create');
Route::post('formbuilder/{id}','FormBuilderController@store');

Route::get('frmbuilder/{id}/{cid}','FormBuilderController@show');
Route::get('frmbuilder/edit/{id}/{cid}','FormBuilderController@edit');
Route::put('frmbuilder/update/{id}/{cid}','FormBuilderController@update');

Route::resource('counter','SaleController');
Route::post('getbarcode','ProductController@getBarcode');
Route::resource('product','ProductController');
Route::post('stock','ProductController@getStock');
Route::put('stock/update/{id}','ProductController@update');

