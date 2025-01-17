<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Arist
Route::get('/artist', 'ArtistController@index');
Route::get('/artist/demo', 'ArtistController@demo');
Route::get('/artist/{artist}', 'ArtistController@show');
Route::get('/artist/search/{key}', 'ArtistController@search');
// Article
Route::get('/article', 'ArticleController@index');
Route::get('/article/{article}', 'ArticleController@show');
// Decor
Route::get('/decor', 'DecorController@index');
Route::get('/decor/{decor}', 'DecorController@show');
Route::get('/decor/search/{key}', 'DecorController@search');
// Gallery
Route::get('/gallery', 'GalleryController@index');
// Photograph
Route::get('/photograph', 'PhotographController@index');
Route::get('/photograph/{photograph}', 'PhotographController@show');
Route::get('/photograph/search/{key}', 'PhotographController@search');
// Restaurant
Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/{restaurant}', 'RestaurantController@show');
Route::get('/restaurant/search/{key}', 'RestaurantController@search');
// Staff
Route::get('/staff', 'StaffController@index');
Route::get('/staff/{staff}', 'StaffController@show');
// Videomaker
Route::get('/videomaker', 'VideomakerController@index');
Route::get('/videomaker/{videomaker}', 'VideomakerController@show');
Route::get('/videomaker/search/{key}', 'VideomakerController@search');
// Genres for [artist, decor, photograph, restaurant, videomaker]
Route::get('/artist-genres', 'GenreController@artist_genres');
Route::get('/decor-genres', 'GenreController@decor_genres');
Route::get('/photograph-genres', 'GenreController@photograph_genres');
Route::get('/videomaker-genres', 'GenreController@videomaker_genres');

Route::post('/application/store', 'ApplicationController@store')->middleware('guest');
Route::get('/page/information', 'PageController@index')->middleware('guest');
Route::get('/page/phone', 'PageController@getPhone')->middleware('guest');
Route::get('/page/email', 'PageController@getEmail')->middleware('guest');
Route::get('/page/address', 'PageController@getAddress')->middleware('guest');
Route::get('/page/metas', 'PageController@getMetas')->middleware('guest');
Route::get('/page/slider', 'PageController@getImages')->middleware('guest');
Route::get('/page/urls', 'PageController@getUrls')->middleware('guest');

