<?php
include_once('test.php');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Xây dựng lớp Fan</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Fan 1</th>
                <th>Fan 2</th>
                <th><a href="<?= '?clear=true' ?>"><input type="button" value="Reset"></a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="<?= '?speed=s1' ?>"><input type="button" value="SLOW"></a>
                    <a href="<?= '?speed=m1' ?>"><input type="button" value="MEDIUM"></a>
                    <a href="<?= '?speed=f1' ?>"><input type="button" value="FAST"></a>
                    <a href="<?= '?power=f1' ?>"><input type="button" value="POWER"></a>
                </td>
                <td>
                    <a href="<?= '?speed=s2' ?>"><input type="button" value="SLOW"></a>
                    <a href="<?= '?speed=m2' ?>"><input type="button" value="MEDIUM"></a>
                    <a href="<?= '?speed=f2' ?>"><input type="button" value="FAST"></a>
                    <a href="<?= '?power=f2' ?>"><input type="button" value="POWER"></a>
                </td>
            </tr>
            <tr>
                <td><?= $fan1 ?></td>
                <td><?= $fan2 ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>