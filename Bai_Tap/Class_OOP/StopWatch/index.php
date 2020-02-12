<?php include_once ('proccess.php'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Xây dựng lớp StopWatch</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="submit" value="Submit">
    </form>
    <h1><?= ($elapsedtime ?? null) ? $elapsedtime . " Milisenconds" : null ?></h1>
    <h2><?= count($arr) ?></h2>
</body>
</html>