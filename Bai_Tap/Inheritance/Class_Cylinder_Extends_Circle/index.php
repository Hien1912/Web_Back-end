<?php
include_once("Circle.class.php");
include_once("Cylinder.class.php");

$circle = new Circle(2,"red");
$cylinder = new Cylinder(3,"yellow",5);

echo $circle;
echo "<br><br>";
echo $cylinder;

?>