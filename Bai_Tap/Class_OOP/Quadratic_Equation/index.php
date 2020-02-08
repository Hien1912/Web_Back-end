<?php include("process.php")?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Xây dựng lớp QuadraticEquation (Phương trình bậc hai)</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2><label>Equation: Ax<sup>2</sup> + Bx + C = 0</h2>
        <div>
            <div>Operand A:</div>
            <div>
                <input type="text" name="a" >
                <span><?= $a ?? false ? (is_numeric($a) ? null : $a) : null ?></span>
            </div>
        </div>
        <div>
            <div>Operand B:</div>
            <div>
                <input type="text" name="b">
                <span><?= $b ?? false ? (is_numeric($b) ? null : $b) : null ?></span>
            </div>
        </div>
        <div>
            <div>Operand C:</div>
            <div>
                <input type="text" name="c">
                <span><?= $c ?? false ? (is_numeric($c) ? null : $c) : null ?></span>
            </div>
        </div>
        <div class="button">
            <div class="reset">
                <input type="reset" name="reset" value="Reset">
            </div>
            <div class=submit>
                <input type="submit" name="submit" value="calculate">
            </div>
        </div>
    </form>
    <div>
        <h2><?= ($root ?? null) ? "Result:The equation ($a.x<sup>2</sup>) + ($b.x) + ($c) = 0  $root" : null?></h2>
    </div>
</body>
</html>