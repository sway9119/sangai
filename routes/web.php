<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('collections', 'App\Http\Controllers\CollectionsController@index');
Route::get('items', 'App\Http\Controllers\ItemsController@index');