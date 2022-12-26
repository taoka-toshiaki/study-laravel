<?php

use Illuminate\Support\Facades\App;
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

Route::get('/','\App\Http\Controllers\SubmitController@index');
Route::post('/','\App\Http\Controllers\SubmitController@post');
// Route::get('hello/{id}/{pass?}', "\App\Http\Controllers\HelloController@index");
// Route::post('hello/{id}/{pass?}',"\App\Http\Controllers\HelloController@post");
// Route::get('hello','\App\Http\Controllers\HelloController@test')->middleware('hello');
Route::get('/db','\App\Http\Controllers\HelloDBController@index');
Route::get('/db/add','\App\Http\Controllers\HelloDBController@addindex');
Route::post('/db/add','\App\Http\Controllers\HelloDBController@addpost');
Route::get('/db/index','\App\Http\Controllers\PersonController@index');
Route::resource('/rest','\App\Http\Controllers\RestappContoroller');
Route::get('/hello/rest','\App\Http\Controllers\RestappContoroller@rest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
