<?php
    include_once('Shape.php');
    include_once('Triangle.php');

    if (isset($_POST["submit"])) {
        $error = null;
        is_numeric($_POST["side1"]) ? $side1 = $_POST["side1"] : $error = "Side 1 not a number!<br>";
        is_numeric($_POST["side2"]) ? $side2 = $_POST["side2"] : $error .= "Side 2 not a number!<br>";
        is_numeric($_POST["side3"]) ? $side3 = $_POST["side3"] : $error .= "Side 3 not a number!";
        $color=$_POST['color'];
        $error ? $error : ($error = ($side1 + $side2 > $side3 && $side2 + $side3 >$side1 && $side3 + $side1 > $side2)? null : "Not a triangle");
        if (!$error) {
            $triangle = new Triangle($color, $side1, $side2, $side3);
        }
    }
?>

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