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
        <h2>Thêm người dùng</h2>
        @if (!empty(session('success')))
        <div>
            <span class="text-success">{{ session('success') }}</span>
        </div>
        @endif
        <form action="{{ route('customer.store') }}" method="post">
            @csrf
            <div class="form-row mb-2">
                <div class="col-3">
                    <label>Họ Và Tên:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" name="name">
                </div>
            </div>
            <div class="form-row mb-2">
                <div class="col-3">
                    <label>Số điện thoại:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="tel" name="phone">
                </div>
            </div>
            <div class="form-row mb-2">
                <div class="col-3">
                    <label>Email:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="email" name="email">
                </div>
            </div>
            <div class="form-row mb-2 col-9">
                <button class="btn btn-success btn-block" type="submit">Thêm</button>
            </div>
        </form>
        <div>
        </div>
    </div>
</body>
</html>