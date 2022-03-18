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


Route::get('/', 'Crud@index')->name('index');
Route::get('/add', 'Crud@create')->name('add');
Route::post('/store', 'Crud@store')->name('storeData');
Route::post('/update/{id}', 'Crud@update')->name('updateData');
// Route::post('/update', 'Crud@update')->name('updateData');

Route::get('/editData/{id}', 'Crud@edit')->name('editData');

Route::get('/destroy/{id}', 'Crud@destroy')->name('destroy');


// Route::get('/add', function () {
//     return view('addData');
// });





