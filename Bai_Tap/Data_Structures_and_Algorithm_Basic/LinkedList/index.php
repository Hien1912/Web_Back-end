<?php include_once('process.php'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[Thực hành] Triển khai lớp LinkedList đơn giản</title>
</head>
<body>
    <fieldset>
        <legend>Insert First</legend>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <span>Data:</span>
            <input type="text" name="data">
            <input type="submit" value="Insert" name="first">
            <input type="submit" value="RESET" name="reset">
        </form>
    </fieldset>
    <fieldset>
        <legend>Insert Last</legend>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <span>Data:</span>
            <input type="text" name="data">
            <input type="submit" value="Insert" name="last">
        </form>
    </fieldset>
    <fieldset class="show">
        <legend>List data:</legend>
        <table>
                <?php
                    if ($_SESSION['list'] ?? false) {
                        $node = $_SESSION['list']->totalNodes();
                        echo "<tr><th>Total nodes: $node</th>";
                        for ($i=0; $i < $node; $i++) {
                            echo "<th>$i</th>";
                        }
                        echo "</tr><tr><td>Array list:</td>";

                        foreach ($_SESSION['list']->readList() as $data) {
                            echo "<td>$data</td>";
                        }
                        echo "</tr>";
                    }
                ?>            
        </table>
    </fieldset>
</body>
</html>