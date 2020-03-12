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
    return view('welcome');
});


Route::prefix('customer')->group(function () {
    Auth::routes();
    Route::get('/', "CustomerController@index")->name('customer.home');
    route::get('create', "CustomerController@create")->name('customer.create');
    Route::post('store', "CustomerController@store")->name('customer.store');
    Route::get('{id}/show', 'CustomerController@show')->name('customer.show');
    Route::get('{id}/edit', "CustomerController@edit")->name('customer.edit');
    Route::patch('{id}/update', 'CustomerController@update')->name('customer.update');
    Route::delete('{id}', 'CustomerController@destroy')->name('customer.delete');
});

// task management

Route::prefix('tasks')->group(function () {
    Auth::routes();
    Route::get('/', "TaskController@home")->name('task.home');
    Route::get('index', "TaskController@index")->name('task.index');
    route::get('create', "TaskController@create")->name('task.create');
    Route::post('store', "TaskController@store")->name('task.store');
    Route::get('{id}/show', 'TaskController@show')->name('task.show');
    Route::get('{id}/edit', "TaskController@edit")->name('task.edit');
    Route::patch('{id}/update', 'TaskController@update')->name('task.update');
    Route::delete('{id}', 'TaskController@destroy')->name('task.delete');
});
