<?php
include_once ('Colorable.interface.php');
include_once ('Shape.class.php');
include_once ('Circle.class.php');
include_once ('Cylinder.class.php');
include_once ('Rectangle.class.php');
include_once ('Square.class.php');

$shapes[0] = new Circle('Circle 01', 3);
$shapes[1] = new Cylinder('Cylinder 01', 3 , 4);
$shapes[2] = new Rectangle('Rectangle 01', 3 , 4);
$shapes[3] = new Square('Square 01', 4 , 4, 4);


foreach ($shapes as $shape) {
    echo "<br>";
    echo $shape->showInfor() . '<br>';
    echo $shape->name . ' area: ' . $shape->calculateArea();
    echo "<br>";
    echo $shape->name . ' perimeter: ' . $shape->calculateArea();
    echo "<br>";
    if ($shape instanceof Square) {
        echo 'Square implements Colorable: ' . $shape->howToColor();
    }
}

?>
