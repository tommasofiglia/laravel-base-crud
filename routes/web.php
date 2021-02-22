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

Route::get('/', 'PageController@home')->name('home');
Route::get('blog', 'PageController@blog')->name('blog');
Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::get('about', 'PageController@about')->name('about');

//Resource routes
Route::resource('posts', 'PostController');
