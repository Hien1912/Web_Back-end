<?php
    include_once("Point2D.php");
    include_once('Point3D.php');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Lớp Point2D và lớp Point3D</title>
</head>
<body>
    <h1>Point2D</h1>
    <?php

    $point2d = new Point2D();
    echo "Lớp Point khởi tạo không tham số:<br>";
    echo $point2d;
    echo "<br>Set giá trị x = 4<br>";
    $point2d->setX(4);
    echo $point2d;
    echo "<br>Set giá trị y = 5<br>";
    $point2d->setY(5);
    echo $point2d;
    echo "<br>Set giá trị x = 2 y = 3<br>";
    $point2d->setXY(2,3);
    echo $point2d;
    ?>

    <h1>Point3D</h1>
    <?php
    $point3d = new Point3D();
    echo "Lớp Point3D khởi tạo không tham số:<br>";
    echo $point3d;
    echo "<br>Set giá trị x = 6<br>";
    $point3d->setX(6);
    echo $point3d;
    echo "<br>Set giá trị y = 5<br>";
    $point3d->setY(5);
    echo $point3d;
    echo "<br>Set giá trị z = 10<br>";
    $point3d->setZ(10);
    echo $point3d;
    echo "<br>Set giá trị x = 1, y = 2, z = 3<br>";
    $point3d->setXYZ(1,2,3);
    echo $point3d;
    ?>
</body>
</html>