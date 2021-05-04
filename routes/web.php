<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('collections', 'App\Http\Controllers\CollectionsController@index');
Route::get('shop', 'App\Http\Controllers\PagesController@shop');
Route::get('about', 'App\Http\Controllers\PagesController@about');
Route::get('news', 'App\Http\Controllers\NewsController@index');
Route::get('items', 'App\Http\Controllers\ItemsController@index');