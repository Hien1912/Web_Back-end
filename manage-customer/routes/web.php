<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('filter', 'CustomerController@filterByCity')->name('customer.filterByCity');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('customer', 'CustomerController')->middleware('auth');
Route::resource('cities', 'CityController')->middleware('auth');
