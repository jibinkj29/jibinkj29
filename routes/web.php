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
    return view('student.index');
});
    Route::get('/Student','StudentController@index')->name('student.index');
    Route::get('/Student/Add','StudentController@add')->name('student.add');
    Route::get('/Student/edit/{id}','StudentController@edit')->name('student.edit');
    Route::get('/Student/delete/{id}','StudentController@delete')->name('student.delete');
    Route::post('/Student/Submit','StudentController@submit')->name('student.submit');
    Route::post('/Student/Update','StudentController@update')->name('student.update');

    Route::get('/Marks','MarkController@index')->name('marks.index');
    Route::get('/Marks/Add','MarkController@add')->name('marks.add');
    Route::get('/Marks/edit/{id}/{term}','MarkController@edit')->name('marks.edit');
    Route::get('/Marks/delete/{id}/{term}','MarkController@delete')->name('marks.delete');
    Route::post('/Marks/Submit','MarkController@submit')->name('marks.submit');
    Route::post('/Marks/Update','MarkController@update')->name('marks.update');

