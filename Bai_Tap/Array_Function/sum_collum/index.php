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
                        <th>Total rows:</th>
                        <th>
                            <input type="text" name="row" placeholder="<?=$error['row']??null?>">
                        </th>
                    </tr>
                    <tr>
                        <th>Total cols:</th>
                        <th>
                            <input type="text" name="col" placeholder="<?=$error['col']??null?>">
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>
                            <input type="submit" value="Generate Matrix">
                        </th>
                    </tr>
                </thead>
            </table>
        </form>
    </fieldset>
</body>
</html>