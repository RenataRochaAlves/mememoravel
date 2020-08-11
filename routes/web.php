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
    return view('home');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/profilecontent/{id}', 'FavoritesController@showMemesFromUser');
Route::get('/favoritecontent/{id}', 'FavoritesController@showFavoriteMemes');

Route::get('/favorites', function(){
    return view('favorites');
});

Route::get('/editprofile', function(){
    return view('editprofile');
});
Route::post('/editprofile', 'Auth\EditUserController@edit');

Route::get('/addmeme', function(){
    return view('addmeme');
});
Route::post('/addmeme', 'MemeController@create');

Route::get('/favorite/{id}', 'FavoritesController@addToFavorites');
Route::get('/favorite/{meme_id}/{user_id}', 'FavoritesController@checkFavorite');
Route::delete('/favorite/{meme_id}/{user_id}', 'FavoritesController@removeFromFavorites');

Route::get('/denouncememe/{id}', 'MemeController@newDenounce');
Route::post('/denouncememe/{id}', 'MemeController@createDenounce');

Route::get('/erro', function(){
    return view('erro');
});

Route::delete('/deletememe/{id}', 'MemeController@deleteMemeById');
Route::get('/memes/asc', 'MemeController@getMemesByAsc');
Route::get('/memes/{year}', 'MemeController@getMemesByYear');
Route::get('/search/{search}', 'MemeController@getMemesBySearch');
Route::get('/getyears', 'MemeController@getYears');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
