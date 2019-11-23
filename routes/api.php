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

Route::group(['prefix' => 'authors'], static function () {
    Route::get('/', 'AuthorController@index')->name('author.list');
    Route::post('/', 'AuthorController@store')->name('author.store');
    Route::get('/{author}', 'AuthorController@show')->name('author.show');
    Route::put('/{author}', 'AuthorController@update')->name('author.update');
});

Route::group(['prefix' => 'posts'], static function () {
    Route::get('/', 'PostController@index')->name('post.list');
    Route::post('/', 'PostController@store')->name('post.store');
    Route::get('/{post}', 'PostController@show')->name('post.show');
    Route::put('/{post}', 'PostController@update')->name('post.update');
});

