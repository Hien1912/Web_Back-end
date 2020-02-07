<?php
function generateArr()
{
    $arr = null;
    for ($i = 0; $i < 100; $i++) {
        $arr[$i] = random_int(0, 100);
    }
    return $arr;
}

session_start();

if (!$_SESSION['arr']) {
    $arr = generateArr();
} else {
    $arr = $_SESSION["arr"];
}

$error = null;
$index = null;
try {
    if (isset($_POST["submit"])) {
        $index = trim($_POST["index"]);
        $int = filter_var($index, FILTER_VALIDATE_INT);
        if ($int || $int === 0) {
            $index = (int) $index;
            if ($index < 0 || $index >= 100) {
                throw new Exception("Chỉ số vượt quá giới hạn của mảng");
            }
        } else {
            if (empty($index)) {
                throw new Exception("Chỉ sổ Không được để trống");
            } else {
                throw new Exception("Chỉ số phải là số nguyên");
            }
        }
    } else {
        $arr = generateArr();
        $_SESSION["arr"] = $arr;
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Hiển thị thông báo nếu người dùng nhập vào chỉ số không hợp lệ</title>
</head>

<body>
    <fieldset style="width:fit-content;">
        <legend>Index value</legend>
        <form action=" <?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="index">
            <input type="submit" value="Search" name="submit"><br>
            <span style="color:red;"><?= $error ?? null ?></span>
        </form>
    </fieldset>
    <?php for ($i = 0; $i < count($arr); $i++) : ?>
        <span><?= ($i === $index) ? "<strong style='color:yellow;background:red;'>$arr[$i]</strong>" : $arr[$i] ?? null ?></span>
    <?php endfor ?>
</body>

</html>