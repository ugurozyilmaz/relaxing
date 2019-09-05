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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth
Route::namespace('Auth')->prefix('auth')->middleware([])->group(function () {
    Route::post('/register', 'RegisterController@register');
    Route::post('/login', 'LoginController@login');
    Route::post('/reset', 'ForgotPasswordController@reset');
});

//Hello
Route::post('/hello', 'HelloController@hello')->middleware('auth:api');

//Categories
Route::get('/category', 'CategoryController@index')->middleware('auth:api');

//Songs
Route::get('/category/{id}', 'SongController@index')->middleware('auth:api');

//Favorites
Route::get('/favorite', 'FavoriteController@index')->middleware('auth:api');
Route::post('/favorite/{id}', 'FavoriteController@create')->middleware('auth:api');
Route::delete('/favorite/{id}', 'FavoriteController@destroy')->middleware('auth:api');
