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


/*
 * SitesController
*/
Route::get('/', 'SitesController@welcome')->name('home');
Route::get('/dashboard', 'SitesController@dashboard')->name('dashboard');

/*
 * SessionsController
*/
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

/*
 * TestController
*/
Route::get('/test/{test}', 'TestsController@run');

/*
 * SettingsController
*/
Route::get('/settings', 'SettingsController@index');
