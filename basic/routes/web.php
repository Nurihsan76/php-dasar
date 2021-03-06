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
    return view('welcome');
});


// Route::get('/article', 'ArticleController@index');
// Route::get('/article/create', 'ArticleController@create');
// Route::get('/article/{article}/edit', 'ArticleController@edit');
// Route::get('/article/{article}', 'ArticleController@show');
// Route::post('/article', 'ArticleController@store');
// Route::put('/article/{article}', 'ArticleController@update');
// Route::delete('/article/{article}', 'ArticleController@destroy');

Route::resource('article', 'ArticleController');