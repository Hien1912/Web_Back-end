<?php
include "derect.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Tính tổng các số ở một cột xác định</title>
</head>
<body>
    <fieldset>
        <legend>Create matrix</legend>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <table>
                <thead>
                    <tr>
                        <td>Total rows:</td>
                        <td>
                            <input type="text" name="row" placeholder="<?=$error['row']??null?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Total cols:</td>
                        <td>
                            <input type="text" name="col" placeholder="<?=$error['col']??null?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Generate Matrix">
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
    </fieldset>
</body>
</html>