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
        @if (!empty(session('success')))
        <div>
            <span class="text-success">{{ session('success') }}</span>
        </div>
        @endif
        <a href="{{ route('customer.create') }}" class="btn btn-block btn-primary">Thêm</a>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead thead-dark">
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($customers))
                <tr>
                    <td>Không có danh sách</td>
                </tr>
                @else
                @foreach ($customers as $no => $customer)
                <tr>
                    <td> {{ $no + 1 }} </td>
                    <td> {{ $customer->name }} </td>
                    <td> {{ $customer->phone }} </td>
                    <td> {{ $customer->email }} </td>
                    <td class="text-center">
                        <a href="{{ route('customer.show',['id' => $customer->id])}}" class="btn btn-info">Xem</a> |
                        <a href="{{ route('customer.edit',['id' => $customer->id])}}" class="btn btn-warning">Sửa</a> |
                        <a href="#delete{{ $customer->id }}" data-toggle="modal" class="btn btn-danger">Xóa</a>
                        <div class="modal fade" id="delete{{ $customer->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3 class="text-danger">Xác nhận xóa</h3>
                                        <form action="{{ route('customer.delete',['id' => $customer->id])}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Xóa</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>