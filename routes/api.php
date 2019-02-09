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


Route::apiResource('/artist', 'ArtistController');
Route::apiResource('/article', 'ArticleController');
Route::apiResource('/decor', 'DecorController');
Route::apiResource('/gallery', 'GalleryController');
Route::apiResource('/photograph', 'PhotographController');
Route::apiResource('/restaurant', 'RestaurantController');
Route::apiResource('/staff', 'StaffController');
Route::apiResource('/videomaker', 'VideomakerController');
Route::post('/application/store', 'ApplicationController@store')->middleware('guest');
