<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/memes', 'Api\MemeController@showAllMemes');

// Route::post('/meme', 'Api\MemeController@createMeme');

Route::get('/meme/{id}', 'Api\MemeController@showMemeById');

// Route::put('/meme/{id}', 'Api\MemeController@editMemeById');

// Route::delete('/meme/{id}', 'Api\MemeController@deleteMemeById');
