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

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@update_avatar');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

// admin route
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('users', 'UsersController');

 });
// route validation ajax login + register
 Route::get('/login', 'LoginController@index')->name('login');
 Route::post('/login', 'LoginController@check_login')->name('login.check_login');

 Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@store')->name('register.store');

