<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Trang đăng ký người dùng</title>
</head>
<body>
    <form method="post">
    <?php include "data.php" ?>
        <div class="row  form-group">
            <div class="col-3">
                <label>Name:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="name" placeholder="name">
                <span><?= $nameErr ?? "" ?></span>
            </div>
        </div>
        <div class="row  form-group">
            <div class="col-3">
                <label>Email:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="email" placeholder="example@email.com">
                <span><?= $emailErr ?? "" ?></span>
            </div>
        </div>
        <div class="row  form-group">
            <div class="col-3">
                <label>Phone:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="tel" name="phone" placeholder="number">
                <span><?= $phoneErr ?? "" ?></span>
            </div>
        </div>
        </div>
        <div class="row  form-group">
            <div class="col-3">
            </div>
            <div class="col-5">
                <input class="form-control" type="submit" value="Loggin">
            </div>
        </div>
        <div>
        </div>
    </form>
    <div>
        <table class="table-bordered ml-5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php include "error.php" ?>   
            </tbody>
        </table>     
    </div>
</body>
</html>