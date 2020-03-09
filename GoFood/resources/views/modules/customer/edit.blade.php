<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            margin: .5em;
        }
        fieldset{
            margin: 0 auto;
            width: fit-content;
        }
        button {
            margin-left: .6em ;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Trang thêm thông tin</legend>
        <form action="update" method="post">
            @csrf
            <div>
                <div>
                    <label>Họ Và Tên:</label>
                </div>
                <div>
                    <input type="text" name="hovaten" placeholder="Họ và Tên" value="{{ $customer['hovaten'] }}">
                </div>
            </div>
            <div>
                <div>
                    <label>Số điện thoại:</label>
                </div>
                <div>
                    <input type="tel" name="sodienthoai" placeholder="Số điện thoại" value="{{ $customer['sodienthoai'] }}">
                </div>
            </div>
            <div>
                <div>
                    <label>Email:</label>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" value="{{ $customer['email'] }}">
                </div>
            </div>
            <div>
                <button type="submit">Sửa thông tin</button>
            </div>
        </form>
    </fieldset>
</body>
</html>
</body>
</html>