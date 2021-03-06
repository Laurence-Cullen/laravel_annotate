<?php

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/search', 'HomeController@search')->name('search');
Route::get('/my_images', 'MyImagesController@images')->name('myImages');

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/image/{fileName}', 'ImagesController@serve');
Route::post('/image/upload', 'ImagesController@upload')->name('upload');

Route::get('/detail/{imageID}', 'ImagesController@detail')->name('detail');

Route::view('/searchdev', 'searchDev');
Route::get('/detectable-object/find', 'SearchController@searchObjects')->name('find.object');
