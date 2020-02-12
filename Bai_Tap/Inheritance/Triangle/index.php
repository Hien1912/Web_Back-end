<?php include_once ("main.php") ?>;
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[**Bài tập] Thiết kế và triển khai lớp Triangle</title>
</head>
<body>
    <form method="post">
        <div class="form">
            <span>Color:</span>
            <input type="text" name="color">
        </div>
        <div class="form">
            <span>Side 1:</span>
            <input type="text" name="side1">
        </div>
        <div class="form">
            <span>Side 2:</span>
            <input type="text" name="side2">
        </div>
        <div class="form">
            <span>Side 3:</span>
            <input type="text" name="side3">
        </div>
        <div class="form">
            <input type="reset" name="reset" value="reset">
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
    <h1><?= ($triangle??null) ? $triangle : null ?></h1>
    <span class="error"><?= ($error??null) ? $error : null ?></span>
</body>
</html>