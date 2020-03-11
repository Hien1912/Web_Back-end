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
        <form action="{{ route('customer.update', ['id' => $customer->id]) }}" method="post">
        @csrf
        @method('patch')
            <div class="row">
                <div class="col-3">
                    <label>Họ Và Tên:</label>
                </div>
                <div class="col-9">
                    <input type="text" name="name" value="{{ $customer->name }}">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Số điện thoại:</label>
                </div>
                <div class="col-9">
                    <input type="tel" name="phone" value="{{ $customer->phone }}">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Email:</label>
                </div>
                <div class="col-9">
                    <input type="email" name="email" value="{{ $customer->email }}">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success mx-auto">Lưu thay đổi</button>
            </div>
        </form>
        @if (!empty(session('success')))
        <div>
            <span class="text-success">{{ session('success') }}</span>
        </div>
        @endif
    </div>
</body>
</html>