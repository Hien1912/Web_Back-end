<?php
    include_once('data.php');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Tìm giá trị nhỏ nhất trong mảng</title>
</head>
<body>
    <form method="post">
        <label>Lenght array 1:</label><br>
        <input type="text" name="number"><br>
        <?= $error ? (empty($number) ? "Empty<br>" : "Not be number!<br>") : null ?>
        <input type="submit" name='submit' value="Add Number">
    </form>
    <div>
        <div>
            <?php
            if (count($arr) > 0) {
                echo "Array:";
                foreach ($arr as $value) {
                    echo " $value";
                }
                echo "<br>Min = $min";
                echo "<br><a href='index.php?submit=Clear' name='submit'><button>Clear Data</button></a>";
            }
            ?>
        </div>
    </div>
</body>
</html>