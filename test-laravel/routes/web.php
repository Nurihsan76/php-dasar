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

// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

// Route::get('/santri', 'SantriController@index');
// Route::get('/santri/create', 'SantriController@create');
// Route::get('/santri/{santri}', 'SantriController@show');
// Route::post('/santri', 'SantriController@store');
// Route::delete('/santri/{santri}', 'SantriController@destroy');
// Route::get('/santri/{santri}/edit', 'SantriController@edit');
// Route::patch('/santri/{santri}', 'SantriController@update');
Route::resource('santri', 'SantriController');



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
