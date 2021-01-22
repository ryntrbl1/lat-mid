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

Route::get('/', 'HomeController@welcomePage') -> name('home');
Route::get('/add', 'HomeController@lyrics') -> name('namalagu');
Route::post('/added', 'HomeController@stores')-> name('song.create');
Route::get('/lirik/{id}', 'HomeController@lirik')-> name('detaillagu');
Route::delete('/delete/{id}', 'HomeController@delete')-> name('hapuslagu');
Route::get('/update/{id}', 'HomeController@update')-> name('updatelagu');
Route::patch('/patch/{id}', 'HomeController@storelagu')-> name('storelagu');
// Route::get('/seemore/{id}', 'HomeController@seemore') -> name('seemore');