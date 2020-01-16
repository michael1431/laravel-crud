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

// Crud Operation Route

Route::get('/read','CrudController@Crud_index')->name('crud.index');

Route::get('/create','CrudController@Crud_create')->name('crud.create');

Route::post('/store','CrudController@Crud_store')->name('crud.store');
Route::get('/edit/{id}','CrudController@Crud_edit')->name('crud.edit');

Route::post('/update/{id}','CrudController@Crud_update')->name('crud.update');

Route::post('/delete/{id}','CrudController@Crud_delete')->name('crud.delete');

