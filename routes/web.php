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

// --- STATIC Routes
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/tags', function () {
// 	return view('tags.index');
// });

// --- Non-Resourceful Routes
// Route::get('/ratings', 'RatingController@index');
// Route::post('/ratings/{id}', 'RatingController@store');
// Route::get('/ratings/{id}', 'RatingController@create');
// Route::delete('/ratings/{id}', 'RatingController@destroy');
// Route::patch('/ratings/{id}', 'RatingController@patch');
// Route::get('/ratings/{id}', 'RatingController@update');

// --- Resourceful Routes
Route::resource('/jokes', 'JokeController');
Route::resource('/ratings', 'RatingController');
Route::resource('/tags', 'TagController');
Route::resource('/votes', 'VoteController');

// --- Purposeful Non-Resourceful Routes
Route::get('/jokes/{id}', 'JokeController@show');
Route::get('/tags/{id}', 'TagController@show');
Route::get('/tags/{id}/edit', 'TagController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
