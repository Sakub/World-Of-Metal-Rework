<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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


Route::get('/','App\Http\Controllers\MainController@index');

Route::get('/search/bands','App\Http\Controllers\SearchController@searchForBands');
Route::get('/search/albums','App\Http\Controllers\SearchController@searchForAlbums');

Route::resource('bands', BandController::class);
Route::resource('albums', AlbumController::class);

Route::resource('user', UserController::class);

Auth::routes();