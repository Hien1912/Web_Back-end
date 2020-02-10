<?php include_once('process.php'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[Thực hành] Triển khai lớp List đơn giản</title>
</head>
<body>
    <fieldset>
        <legend>Add Object </legend>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <span>Value:</span>
            <input type="text" name="object">
            <input type="submit" value="ADD" name="add">
            <input type="submit" value="RESET" name="reset">
        </form>
    </fieldset>
    <fieldset>
        <legend>Get Object</legend>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <span>Index:</span>
            <input type="text" name="index">
            <input type="submit" value="GET" name="get">
        </form>
        <h2><?= ($value ?? true) ? ($value ?? null ? "Result: $value" : null) : "NULL" ?></h2>
    </fieldset>
    <fieldset class="show">
        <legend>Array list:</legend>
        <table>
                <?php
                    if ($_SESSION) {
                        $size = $_SESSION['array']->size();
                        echo "<tr><th>Size: $size</th>";
                        for ($i=0; $i < $size; $i++) {
                            echo "<th>$i</th>";
                        }
                        echo "</tr><tr><td>Array list:</td>";

                        foreach ($_SESSION['array']->arraylist as $obj) {
                            echo "<td>$obj</td>";
                        }
                        echo "</tr>";
                    }
                ?>            
        </table>
    </fieldset>
</body>
</html>