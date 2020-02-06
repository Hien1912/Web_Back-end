<?php
$error=$lenght=null;
if (isset($_REQUEST["lenght"])) {
    $lenght=trim(htmlspecialchars($_REQUEST["lenght"]));
    if (intval($lenght)&&$lenght>0) {
        $lenght=(int)$lenght;
    }else {
        $error=empty($lenght)&&$lenght!="0"?"Empty!":"Must be integer and upper 0";
        $lenght=null;
    }
}

function showMatrix($lenght){
    echo "<table>";
    $sum=0;
    for ($i=0; $i < $lenght; $i++) {
        echo "<tr>";
        for ($j=0; $j < $lenght; $j++) {
            if ($i===$j) {
                $tmp=random_int(0,100);
                $sum+=$tmp;
                echo "<td class='cheo'>".$tmp."</td>";
                continue;
            }
            echo "<td>".random_int(0,100)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<h2>Sum = $sum</h2>";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] mảng hai chiều - tính tổng các số ở đường chéo chính của ma trận vuông</title>
</head>
<body>
    <form method="post">
        <label>Edge lenght:</label><br>
        <input type="text" name="lenght" placeholder="<?=$error??null?>">
        <input type="submit" value="Create Matrix">
    </form>
    <div>
        <?php $lenght?showMatrix($lenght):null?>
    </div>
</body>
</html>