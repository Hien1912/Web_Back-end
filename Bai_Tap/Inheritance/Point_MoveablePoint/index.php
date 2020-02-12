<?php
    include_once('Point.class.php');
    include_once('MoveablePoint.class.php');

    $point = new Point();
    $moveable = new MoveablePoint();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Lớp Point và MoveablePoint</title>
</head>
<body>
    <div>
        <fieldset>
            <legend>Class Point</legend>
            <p>Lớp Point khởi tạo không tham số: <br> <?= $point ?></p>
            <p>Set giá trị x = 4: <br> <?php $point->setX(4); echo $point ?></p>
            <p>Set giá trị y = 5: <br> <?php $point->setY(5); echo $point ?></p>
            <p>Set giá trị x = 2 y = 3: <br> <?php $point->setXY(2, 3); echo $point ?></p>
        </fieldset>
        <fieldset class='movepoint'>
            <legend>Class MoveablePoint</legend>
            <div class="setxy">
                <p>Lớp MoveablePoint khởi tạo không tham số: <br> <?= $moveable ?></p>
                <p>Set giá trị x = 3: <br> <?php $moveable->setX(3); echo $moveable ?></p>
                <p>Set giá trị y = 2: <br> <?php $moveable->setY(2); echo $moveable ?></p>
                <p>Set giá trị x = 4 y = 1: <br> <?php $moveable->setXY(4, 1); echo $moveable ?></p>
            </div>
            <div class="speed">    
                <p>Set giá trị xSpeed = 6: <br> <?php $moveable->setXSpeed(6); echo $moveable ?></p>
                <p>Set giá trị ySpeed = 11: <br> <?php $moveable->setYSpeed(11); echo $moveable ?></p>
                <p>Set giá trị xSpeed = 9 ySpeed = 7: <br> <?php $moveable->setSpeed(9, 7); echo $moveable ?></p>
                <p>Thực hiện move: <br> <?php $moveable->move(); echo $moveable ?></p>
            </div>
        </fieldset>
    </div>  
</body>
</html>