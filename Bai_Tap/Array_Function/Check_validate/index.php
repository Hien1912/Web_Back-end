<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>[Bài tập] Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</title>
</head>
<body>
    <?php include "calc.php"?>
    <form method="post">
        <div class="row form-group">
            <div class="col-3">
                <label>First operand:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="first" value="<?= $first ?? "" ?>">
                <span><?= $firstErr ?? "" ?></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3">
                <label>Operator:</label>
            </div>
            <div class="col-5">
                <select name="operator">
                    <option value="+" <?= ($operator == "+") ? "selected" : null?>>Addition</option>
                    <option value="-" <?= ($operator == "-") ? "selected" : null?>>Subtraction</option>
                    <option value="*" <?= ($operator == "*") ? "selected" : null?>>Multiplication</option>
                    <option value="/" <?= ($operator == "/") ? "selected" : null?>>Division</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3">
                <label>Second operand:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="second" value="<?= $second ?? "" ?>">
                <span><?= $secondErr ?? "" ?></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3">
                <label></label>
            </div>
            <div class="col-5">
                <input class="btn btn-outline-success" type="submit" value="Calculate">
            </div>
        </div>
        <div class="form-group">
            <div class="row form-group pl-3">
                <span id="result"><?= $result?"Result: $first $operator $second = $result":null ?></span>
            </div>
            <div class="row form-group pl-3">
                <span id="error"><?= $error?"Error: $error":null ?></span>
            </div>
        </div>
    </form>
</body>
</html>