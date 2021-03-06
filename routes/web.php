<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

 Route::get('/', 'BannerController@index')->name('home');
 Route::get('/admin/dashboard', 'BannerController@dashboard')->name('admin.dashboard');
 Route::get('/admin/main', 'MainPagesController@index')->name('admin.main');
 Route::put('/admin/main', 'MainPagesController@update')->name('admin.main.update');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
