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

Route::get('/sections','SectionController@index');
Route::get('/sections/{id}','SectionController@show');
Route::get('/sections/{id}/title','SectionController@title');
Route::post('/add/setting','SettingController@store');
Route::post('/add/section','SectionController@store');
Route::post('/update/setting','SettingController@update');
