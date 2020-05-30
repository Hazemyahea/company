<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', function () {
        return view('home.home');
    });

    Route::get('/store', 'HomeController@getProduct')->name('home.store');
    Route::get('/blog', 'HomeController@getPosts')->name('home.blog');
    Route::get('home/category/{id}', 'HomeController@show')->name('home.category');
    Route::get('blog/post/{id}', 'HomeController@showPost')->name('home.post');
    Route::post('/contact', 'HomeController@Contact')->name('home.home');
    Route::get('/', 'HomeController@getProductHome')->name('home.home');
    Route::get('/about', 'HomeController@about')->name('home.about');
});

// Admin



Route::group(['middleware'=>'auth'],function()
{
    Route::get('/admin', 'AdminController@index')->name('index');
    Route::resource('admin/categories','CategoriesController');
    Route::resource('admin/products','ProductController');
    Route::resource('admin/posts','PostController');
    Route::resource('admin/orders','OrdersController');
    Route::resource('admin/users','UserController');

});


