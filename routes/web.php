<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! https://laravel-news.com/your-first-laravel-application
|
*/

Route::get('/', function () {
    $links = App\Link::all();
    return view('welcome',['links' => $links]);
});

Route::get('/submit', function(){
    return view('submit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
