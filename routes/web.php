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

Route::get('/login', [
    'as' => 'get-login-admin',
    'uses' => 'admin\LoginController@getlogin'
]);
Route::post('/login', [
	'as' => 'post-login-admin',
	'uses' => 'admin\LoginController@postlogin'
]);
Route::get('/logout',[
    'as' => 'get-logout-admin',
    'uses' => 'admin\LoginController@getlogout'
]);
Route::middleware('login-admin')->group(function () {
    Route::prefix('admin-hs')->group(function () {
        Route::get('/', [
            'as' => 'admin',
            'uses' => 'admin\Dashboard@index'
        ]);
    });
});

