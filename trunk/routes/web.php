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

Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);
Route::resource('users','UserController');


Auth::routes();
Auth::routes();
Route::get('/verify/{token}', 'Auth\RegisterController@verify');
// Route::get('/user/profile/', ['middleware' => 'auth', 'uses' => 'UserController@editProfile']);
// 
Route::middleware(['auth', 'admin'])->group(function () {
	Route::resource('groups','GroupController');
});