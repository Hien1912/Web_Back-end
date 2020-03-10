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
    <title>[Thực hành] Ứng dụng quản lý khách hàng - P2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Danh sách khách hàng</h1>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Họ và Tên</th>
                        <th>Ngày sinh</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @empty($customers)
                        <tr>
                            <td>Danh sách trống</td>
                        </tr> 
                    @endempty
                    @if (!empty($customers))
                        @foreach ($customers as $no => $customer)
                            <tr>
                                <td> {{ $no }} </td>
                                <td> {{ $customer['name'] }} </td>
                                <td> {{ $customer['dob'] }} </td>
                                <td> {{ $customer['email'] }} </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>    
    </div>
</body>
</html>