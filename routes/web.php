<?php
use Illuminate\Support\Facades\Log;
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

Route::get('/', function(){
  Log::debug('Home page accessed');
  return view('pages.home');
});

Route::resource('/admin/settings','SettingController');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/redcms', function(){
  return view('redcms');
});
