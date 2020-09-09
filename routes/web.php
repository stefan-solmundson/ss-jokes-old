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

Route::get('/welcome', function () {
    return view('welcome');
});

// --- Tags
// ONLY Works For STATIC Pages
// Route::get('/tags', function () {
//     return view('tags.index');
// });
// WORKS for DYNAMIC Pages
Route::get('/tags', 'TagController@index');
Route::post('/tags/{id}', 'TagController@store');
Route::get('/tags/{id}', 'TagController@create');
Route::delete('/tags/{id}', 'TagController@destroy');
Route::patch('/tags/{id}', 'TagController@patch');
Route::get('/tags/{id}', 'TagController@update');
// plus
Route::get('/tags/{id}', 'TagController@show');
Route::get('/tags/{id}/edit', 'TagController@edit');

// --- Ratings
// Resourceful Route
// CREATES THIS:
// Route::get('/ratings', 'RatingController@index');
// Route::post('/ratings/{id}', 'RatingController@store');
// Route::get('/ratings/{id}', 'RatingController@create');
// Route::delete('/ratings/{id}', 'RatingController@destroy');
// Route::patch('/ratings/{id}', 'RatingController@patch');
// Route::get('/ratings/{id}', 'RatingController@update');
Route::resource('/ratings', 'RatingController');
Route::resource('/jokes', 'JokeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
