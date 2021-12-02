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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'App\Http\Controllers\ArticleController@index');
Route::get('/profile/create', 'App\Http\Controllers\ArticleController@create');
Route::get('/pahlawan', 'App\Http\Controllers\ArticleController@index_pahlawan');
Route::get('/artikel/{slug}', 'App\Http\Controllers\ArticleController@show');
Route::post('/pahlawan', 'App\Http\Controllers\ArticleController@index_pahlawan');
