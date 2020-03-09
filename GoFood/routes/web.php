<?php

use App\Http\Controllers\HomeController;
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











Route::get('/time', function () {
    return view('index');
});

Route::get('/time/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {
        // Khởi tạo giá trị giờ theo múi giờ UTC
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        // Thay đổi về múi giờ được chọn
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        // Hiển thị giờ theo định dạng mong muốn
        echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('index');
});

Route::get('/home', 'HomeController@index');

Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});

Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});

Route::get('/user', function () {
    return view('user', ['name' => 'Masud Alam']);
});

Route::get('/about', function () {
    return "about";
});

Route::get('/contact', function () {
    return "contact";
});


Route::get('/dictionary', function () {
    $word = null;
    $result = null;

    return view('translate', compact('result', 'word'));
});

Route::post('/dictionary', function () {
    $word = $_POST['word'];
    $key = strtolower(trim($word));
    $words = [
        'run' => "Chạy ngay đi",
        'go' => "Đi thôi nào",
        'tiger' => "Hua òa",
        'dog' => 'Gâu dâu',
        'cat' => 'Meo meo',
        'rat' || 'mouse' => 'Chít chít'
    ];

    if (array_key_exists($key, $words))
        return view('translate', ['result' => $words[$key], 'word' => $word]);

    return view('translate', ['result' => "Không tìm thấy " . $word, 'word' => $word]);
});

// Route::get('/', function () {
//     return view('welcome');
// });

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
