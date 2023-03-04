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

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/connect-account', 'HomeController@connectAccount')->name('connect-account');
Route::get('/reply', 'HomeController@reply')->name('reply');

Route::get('/gmb/connect', 'GMBController@connect')->name('gmb-connect');

Route::get('/gmb/callback', 'GMBController@callback')->name('gmb-callback');

Route::get('/review/{slug}', 'HomeController@review')->name('review');

Route::get('/review/locations/{id}', 'HomeController@locationReview')->name('locationReview');