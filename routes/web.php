<?php

use App\Models\Article;
use App\User;
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


//Route::get('storage_link',function (){
//   \Illuminate\Support\Facades\Artisan::call('storage:link');
//});
Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('guest')->group(function () {

        Route::get('/login', 'AuthController@login_page');
        Route::post('/login', 'AuthController@login')->name('login');

    });

    Route::middleware(['admin_middleware', 'role:superadministrator'])->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::post('/logout', 'AuthController@logout')->name('logout');

        Route::resource('tag', 'TagController')->except('show');
//      Route::get('subscribers','SubscribeController@index')->name('subscribers.index');
//      Route::Delete('subscribers','SubscribeController@index')->name('subscribers.index');
        Route::resource('subscribers', 'SubscribeController')->only('index', 'destroy');
        Route::resource('category', 'CategoryController')->except('show');
        Route::resource('article', 'ArticleController')->except('show');
        Route::resource('admin', 'AdminController')->except('show');
        Route::resource('user', 'UserController')->except('show');
        Route::resource('setting', 'SettingController')->only('index', 'store');
        Route::resource('image', 'ImageController')->only('index', 'create', 'store', 'destroy');
    });


});

Route::namespace('Dashboard')->middleware('auth')->group(function () {
    Route::put('/edit-profile', 'AuthController@edit_profile')->name('edit_profile');
    Route::put('/change-password', 'AuthController@change_password')->name('change-password');
});


Route::namespace('Website')->name('website.')->prefix(LaravelLocalization::setLocale())
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(
        function () {
            Route::get('/', 'HomeController@index')->name('index');
            Route::get('/autoCompleteSearch', 'HomeController@autoCompleteSearch') ;
            Route::get('/search', 'HomeController@search')->name('search');
            Route::get('/article/{slug}', 'ArticleController@show')->name('article.show');
            Route::post('/article/add_to_favorite/{article}', 'ArticleController@add_to_favorite')->name('article.add_to_favorite');

            Route::get('/category/{slug}', 'HomeController@show_category')->name('category.show');
            Route::get('/tag/{slug}', 'HomeController@show_tag')->name('tag.show');
            Route::post('/subscribe/create', 'SubscribeController@store')->name('subscribe.create');
            Route::get('/unsubscribe', 'SubscribeController@unsubscribe')->name('unsubscribe');

            Route::post('/comment/create', 'CommentController@store')->name('comment.create');
            Route::post('/comment/add_to_favorite/{comment}', 'CommentController@add_to_favorite')->name('comment.add_to_favorite');

            Route::post('/login', 'AuthController@login')->name('login');
            Route::post('/register', 'AuthController@register')->name('register');
            Route::post('/logout', 'AuthController@logout')->name('logout');


        });

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


