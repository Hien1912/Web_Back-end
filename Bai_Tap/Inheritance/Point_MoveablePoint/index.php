<?php
    include_once('Point.php');
    include_once('MoveablePoint.php');
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Lớp Point và MoveablePoint</title>
</head>
<body>
    <h1>Class Point</h1>
    <?php
    $point = new Point();
    echo "Lớp Point khởi tạo không tham số:<br>";
    echo $point;

    echo "<br>Set giá trị x = 4<br>";
    $point->setX(4);
    echo $point;

    echo "<br>Set giá trị y = 5<br>";
    $point->setY(5);
    echo $point;

    echo "<br>Set giá trị x = 2 y = 3<br>";
    $point->setXY(2,3);
    echo $point;
    ?>

    <h1>Class MoveablePoint</h1>
    <?php
    $map = new MoveablePoint();
    echo "Lớp Point khởi tạo không tham số:<br>";
    echo $map;

    echo "<br>Set giá trị x = 3<br>";
    $map->setX(3);
    echo $map;

    echo "<br>Set giá trị y = 2<br>";
    $map->setY(2);
    echo $map;

    echo "<br>Set giá trị x = 4 y = 1<br>";
    $map->setXY(4, 1);
    echo $map;

    echo "<br>Set giá trị xSpeed = 6<br>";
    $map->setXSpeed(6);
    echo $map;

    echo "<br>Set giá trị ySpeed = 11<br>";
    $map->setYSpeed(11);
    echo $map;

    echo "<br>Set giá trị xSpeed = 9 ySpeed = 7<br>";
    $map->setSpeed(9, 7);
    echo $map;

    echo "<br>Set giá trị xSpeed = 9 ySpeed = 7<br>";
    $map->setSpeed(9, 7);
    echo $map;
    echo "<br>Sử dụng phương thức move<br>";
    echo $map->move();
    ?>
</body>
</html>