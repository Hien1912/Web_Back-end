<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <a href="create">Thêm khách hàng</a>
    <h1>Danh sách khách hàng</h1>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer['id'] }}</td>
                <td>{{ $customer['hovaten'] }}</td>
                <td>{{ $customer['sodienthoai'] }}</td>
                <td>{{ $customer['email'] }}</td>
                <td>
                    <a href="{{ $customer['id'] }}/show">Xem</a> | <a href="{{ $customer['id'] }}/edit">Sửa</a> | <a href="{{ $customer['id'] }}">Xóa</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>