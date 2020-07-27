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

Route::get('/admin', 'HomeController@index');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index');

Route::get('/', 'WebsiteHomePageController@index')->name('homepage');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/dashboard', 'DashboardController@index')->middleware('App\Http\Middleware\AdminMiddleware')->name('dashboard');
Route::get('/uploadspage', 'DashboardController@index')->middleware('App\Http\Middleware\AdminMiddleware')->name('uploadspage');


Route::post('/files-save', 'UploadsController@uploadFile')->name('uploadfile');
Route::post('/file-delete', 'UploadsController@destroyFile')->name('destroyFile');
Route::post('/deletefile', 'UploadsController@deleteFile')->name('deleteFile');

Route::get('/fetchuploads', 'UploadsController@fetchUploads')->name('fetchuploads');
Route::get('/images-show', 'UploadsController@fetchFiles')->name('fetchFiles');