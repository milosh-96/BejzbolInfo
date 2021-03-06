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

Route::group(['prefix'=>'posts','middleware'=>['auth:api']],function() {
    Route::post('/','PostController@store');
    Route::post('/{post}','PostController@destroy');
    Route::post('/update/{post}','PostController@update');
});
