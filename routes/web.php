<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function () {
    return view('welcome');
});;

Route::get('/home/{user}', 'HomeController@index')->name('home');

Route::get('/getPlaylist', 'PlaylistController@getPlaylist');

Route::get('/playlist', 'PlaylistController@index');

Route::get('/getMusic/{id}', 'MusicController@getMusic');

Route::get('/getMusic', 'MusicController@getAllMusic');

Route::post('/addToPlaylist', 'PlaylistController@addToPlaylist');

Route::get('/createPlaylist', 'PlaylistController@create');

Route::post('/saveplaylist', 'PlaylistController@store');




