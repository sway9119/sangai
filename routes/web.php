<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('items', 'App\Http\Controllers\ItemsController@index');