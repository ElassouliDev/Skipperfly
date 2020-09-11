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

Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::resource('tag','TagController')->except('show');
    Route::resource('category','CategoryController')->except('show');
    Route::resource('article','ArticleController')->except('show');


//    Route::get('/', function () {
//        $route = "";
//        $title = "";
//        return view('dashboard.layouts.index' , compact('route' ,'title'));
//    })->name('index');
});

Route::namespace('Website')->name('website.')->group(function () {
    Route::get('', 'HomeController@index')->name('index');
    Route::get('/article/{slug}', 'ArticleController@show')->name('article.show');
    Route::get('/category/{slug}', 'HomeController@show_category')->name('category.show');
    Route::get('/tag/{slug}', 'HomeController@show_tag')->name('tag.show');


});
