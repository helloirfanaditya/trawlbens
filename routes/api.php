<?php

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

// retrive ALl Movies
Route::get('/AllMovies', 'Api\ImdbController@getAllMovies');
Route::get('/find-movie/{id}', 'Api\ImdbController@findMovies');

Route::get('/v1/candidate', 'CandidateController@index');
