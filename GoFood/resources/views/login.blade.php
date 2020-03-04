<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <fieldset>
        <legend><h1>Đăng nhập</h1></legend>
        <form action="login" method="post">
            @csrf
            <div class="form-row">
                <div class="col-3">
                    <label for="username">Tên đăng nhập</label>
                </div>
                <div class="col-9">
                    <input type="text" name="username" id="username" placeholder="Tên đăng nhập">
                </div>
            </div>
            <div class="form-row">
                <div class="col-3">
                    <label for="password">Mật khẩu</label>
                </div>
                <div class="col-9">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-footer">
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </fieldset>
</body>
</html>