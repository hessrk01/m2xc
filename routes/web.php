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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/success', 'WelcomeController@portfolio')->name('portfolio');



Auth::routes();

Route::get('auth/linkedin', 'Auth\LoginController@redirectToProvider');
Route::get('auth/linkedin/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/article', 'ArticleController');

Route::resource('admin/user', 'UserController');
Route::put('admin/admituser', 'UserController@admit');
Route::put('admin/adminuser', 'UserController@admin');
Route::get('/admin/password/{user}/edit', 'PasswordController@edit')->name('password.edit'); //->middleware('can:view, user');;
Route::put('/admin/password/{user}', 'PasswordController@update')->name('password.change');






// Route::middleware('auth')->group(function() {
//     Route::resource('admin/user', 'UserController');
//     Route::put('admin/admituser', 'UserController@admit');
//     Route::put('admin/adminuser', 'UserController@admin');
// });

