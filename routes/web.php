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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//管理側
Route::group(['middleware' => ['auth.admin']], function () {
	
	//管理側トップ
	Route::get('/admin', 'App\Http\Controllers\admin\AdminTopController@show');
	//ログアウト実行
	Route::post('/admin/logout', 'App\Http\Controllers\admin\AdminLogoutController@logout');
    //News一覧
	Route::get('/admin/news_list', 'App\Http\Controllers\admin\ManageNewsController@showNewsList');
	//News詳細
	Route::get('/admin/news/{id}', 'App\Http\Controllers\admin\ManageNewsController@showNewsDetail');
});

//管理側ログイン
Route::get('/admin/login', 'App\Http\Controllers\admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'App\Http\Controllers\admin\AdminLoginController@login');