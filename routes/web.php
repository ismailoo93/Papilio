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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Affiliate's Routes.
 *
 */
Route::get('/affiliates', 'AffiliatesController@index');

Route::get('/affiliates/{id}', 'AffiliatesController@show');

Route::prefix('affiliates')->group(function () {
    Route::get('/', 'AffiliatesController@index');
    Route::get('{id}', 'AffiliatesController@show');
    Route::delete('{id}', 'AffiliatesController@destroy');
});