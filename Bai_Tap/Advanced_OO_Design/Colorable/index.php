<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
include_once ('Colorable.php');

$shapes[0] = new Circle('Circle 01', 3);
$shapes[1] = new Cylinder('Cylinder 01', 3 , 4);
$shapes[2] = new Rectangle('Rectangle 01', 3 , 4);
$shapes[3] = new Square('Square 01', 4 , 4, 4);


foreach ($shapes as $shape) {
    echo "<br>";
    echo $shape->show() . '<br>';
    echo $shape->name . ' area: ' . $shape->calculateArea();
    echo "<br>";
    echo $shape->name . ' perimeter: ' . $shape->calculateArea();
    echo "<br>";
    if ($shape instanceof Square) {
        echo 'Square implements Colorable: ' . $shape->howToColor();
    }
}

?>
