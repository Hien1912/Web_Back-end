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

Route::get('test', function () {
    $haha = env('APP_NAME');
    return view('test', ['name' => $haha]);
});

Route::get('/greeting', function () {

    echo 'Hello World!';
});

Route::get('/greeting/{name}', function ($name = null) {

    if ($name)
        echo 'Hello ' . $name . '!';
    else
        echo 'Hello Word';
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    if ($_POST['password'] == 'admin')
        return view('login_success', ['name' => $_POST['username']]);
    else return view('login_error');
});

Route::get('/Discount', function () {
    return view('show_discount_amount');
});

Route::post('/display-discount', function () {
    $name = $_POST['name'];
    $priceR = $_POST['price'];
    $persent = $_POST['persent'];

    if (!is_numeric($priceR) || !is_numeric($persent))
        return view('show_discount_amount', ['error' => "Nhập sai"]);

    $amount = $priceR * $persent / 100;
    $priceF = $priceR - $amount;

    return view('show_discount_amount', compact('name', 'priceR', 'persent', 'amount', 'priceF'));
});
