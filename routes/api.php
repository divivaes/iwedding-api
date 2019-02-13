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
Route::get('/artist/{artist}', 'ArtistController@show');
// Article
Route::get('/article', 'ArticleController@index');
Route::get('/article/{article}', 'ArticleController@index');
// Decor
Route::get('/decor', 'DecorController@index');
Route::get('/decor/{decor}', 'DecorController@show');
// Gallery
Route::get('/gallery', 'GalleryController@index');
// Photograph
Route::get('/photograph', 'PhotographController@index');
Route::get('/photograph/{photograph}', 'PhotographController@show');
// Restaurant
Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/{restaurant}', 'RestaurantController@show');
// Staff
Route::get('/staff', 'StaffController@index');
Route::get('/staff/{staff}', 'StaffController@show');
// Videomaker
Route::get('/videomaker', 'VideomakerController@index');
Route::get('/videomaker/{videomaker}', 'VideomakerController@show');
Route::apiResource('/genre', 'GenreController');
Route::post('/application/store', 'ApplicationController@store')->middleware('guest');
Route::get('/page/information', 'PageController@index')->middleware('guest');
