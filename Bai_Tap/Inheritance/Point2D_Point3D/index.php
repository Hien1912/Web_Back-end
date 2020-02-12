<?php
    include_once("Point2D.class.php");
    include_once('Point3D.class.php');

    $point2d = new Point2D();
    $point3d = new Point3D();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Lớp Point2D và lớp Point3D</title>
</head>
<body>
    <div>
        <fieldset>
            <legend>Class Point2D</legend>
            <p>Lớp Point2D khởi tạo không tham số: <br>
                <?= $point2d; ?>
            </p>
            <p>Set giá trị x = 4 <br>
                <?php $point2d->setX(4); echo $point2d; ?>
            </p>
            <p>Set giá trị y = 5 <br>
                <?php $point2d->setY(5); echo $point2d; ?> 
            </p>
            <p>Set giá trị x = 2 y = 3 <br>
                <?php $point2d->setXY(2, 3); echo $point2d; ?> 
            </p>
        </fieldset>
        <fieldset>
            <legend>Class Point3D</legend>
            <p>Lớp Point3D khởi tạo không tham số: <br>
                <?= $point3d; ?>
            </p>
            <p>Set giá trị x = 6 <br>
                <?php $point3d->setX(6); echo $point3d; ?>
            </p>
            <p>Set giá trị y = 5 <br>
                <?php $point3d->setY(5); echo $point3d; ?> 
            </p>
            <p>Set giá trị z = 10 <br>
                <?php $point3d->setZ(10); echo $point3d; ?> 
            </p>
            <p>Set giá trị z = 1 x = 2 y = 3 <br>
                <?php $point3d->setXYZ(1, 2, 3); echo $point3d; ?> 
            </p>
        </fieldset>
    </div>
</body>
</html>