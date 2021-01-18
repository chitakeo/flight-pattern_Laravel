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

Route::get('/articles', 'App\Http\Controllers\ArticleController@index')->name('article.list');
Route::get('/top_page', 'App\Http\Controllers\TopPageController@index')->name('top_page.list');
Route::get('/input', 'App\Http\Controllers\TopPageController@create')->name('top_page.list');