<?php
    include_once("Circle.php");
    include_once("Cylinder.php");

    $circle = new Circle(2,"red");
    $cylinder = new Cylinder(3,"yellow",5);

    echo $circle;
    echo "<br>";
    echo $cylinder;

?>