<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{ route('customer.home') }}" class="btn btn-warning">Trang chủ</a>
        <div class="text-center">
        <h2>Thông tin người dùng</h2>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-3">
                    <label>Họ Và Tên:</label>
                </div>
                <div class="col-6">
                    <span> {{ $customer->name }} </span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Số điện thoại:</label>
                </div>
                <div class="col-6">
                    <span> {{ $customer->phone }} </span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Email:</label>
                </div>
                <div class="col-6">
                    <span> {{ $customer->email }} </span>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>