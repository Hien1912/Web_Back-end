<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[**Bài tập] Hiển thị số lượng tùy ý số nguyên tố đầu tiên</title>
</head>
<body>
    <?php include "syntax.php" ?>
    <fieldset>
        <legend>Show prime number</legend>
        <div class="input">
            <form method="post">
                <label>Total prime number:</label>
                <input type="text" name="number" value="<?= $num ?? 0 ?>">
                <input type="submit" value="Print">
            </form>
        </div>
        <div id="output">
            <span><?= $result ?? null ?></span>
        </div>
    </fieldset>
</body>
</html>