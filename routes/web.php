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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');

Route::get('/about-us', 'MenuController@aboutus')->name('about-us');
Route::get('/Groom', 'MenuController@Groom')->name('Groom');
Route::get('/Bride', 'MenuController@Bride')->name('Bride');
Route::get('/contact', 'MenuController@contact')->name('contact');
