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

// welcome area
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/success', 'WelcomeController@portfolio')->name('portfolio');

Route::resource('/hive', 'HiveController')->only('index');
Route::get('/hive/{slug}', 'HiveController@show')->name('hive.show');

Auth::routes();

// linked in login
Route::get('auth/linkedin', 'Auth\LoginController@redirectToProvider');
Route::get('auth/linkedin/callback', 'Auth\LoginController@handleProviderCallback');

//dash
Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::resource('/admin/article', 'ArticleController');
Route::put('/admin/changedisplay', 'ArticleController@changeDisplay');

Route::resource('/admin/user', 'UserController');
Route::put('/admin/admituser', 'UserController@admit');
Route::put('/admin/adminuser', 'UserController@admin');
Route::get('/admin/password/{user}/edit', 'PasswordController@edit')->name('password.edit'); //->middleware('can:view, user');;
Route::put('/admin/password/{user}', 'PasswordController@update')->name('password.change');

Route::resource('/admin/post', 'PostController');



//upload content play
Route::get('/upload', 'UploadController@getUpload')->name('upload');
Route::post('/upload', 'UploadController@postUpload');


// Route::middleware('auth')->group(function() {
//     Route::resource('admin/user', 'UserController');
//     Route::put('admin/admituser', 'UserController@admit');
//     Route::put('admin/adminuser', 'UserController@admin');
// });

