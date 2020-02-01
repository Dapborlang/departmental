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
Route::get('formpopulateall','FormPopulateController@resources');

Route::resource('formbuilder/{id}','FormBuilderController',['except' => [
    'show','edit'
]]);

Route::resource('counter','SaleController');
Route::post('getbarcode','ProductController@getBarcode');
Route::resource('formpopulateindex','FormPopulateIndexController');
Route::resource('product','ProductController');
Route::post('stock','ProductController@getStock');

