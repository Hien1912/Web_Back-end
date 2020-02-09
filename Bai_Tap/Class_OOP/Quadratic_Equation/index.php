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
                <input type="text" name="a" id="a" value="<?= ($a ?? null) ? (is_numeric($a) ? $a : null) : null ?>">
                <span><?= $a ?? false ? (is_numeric($a) ? null : $a) : null ?></span>
            </div>
        </div>
        <div>
            <div>Operand B:</div>
            <div>
                <input type="text" name="b"  id="b" value="<?= ($b??null) ? (is_numeric($b) ? $b : null) : null ?>">
                <span><?= $b ?? false ? (is_numeric($b) ? null : $b) : null ?></span>
            </div>
        </div>
        <div>
            <div>Operand C:</div>
            <div>
                <input type="text" name="c"  id="c" value="<?= ($c??null) ? (is_numeric($c) ? $c : null) : null ?>">
                <span><?= $c ?? false ? (is_numeric($c) ? null : $c) : null ?></span>
            </div>
        </div>
        <div class="button">
            <div class="reset">
                <input type="button" onclick="main()" value="reset">
            </div>
            <div class=submit>
                <input type="submit" name="submit" value="calculate">
            </div>
        </div>
    </form>
    <div>
        <h2><?= ($root ?? null) ? "Result: $root" : null?></h2>
    </div>
</body>
<script>
    function main() {
        document.getElementById("a").value=null;
        document.getElementById("b").value=null;
        document.getElementById("c").value=null;
    }

</script>
</html>