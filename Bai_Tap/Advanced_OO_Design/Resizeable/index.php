<?php

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
include_once ('Resizeable.php');

echo '<br>';
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo 'Circle resize 50%:<br>';
$circle->resizeAble(50);
echo 'Circle area after: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter after: ' . $circle->calculatePerimeter() . '<br />';

echo '<br>';
$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

echo '<br>';
$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
echo 'Rectangle resize 50%:<br>';
$rectangle->resizeAble(50);
echo 'Rectangle area after: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter after: ' . $rectangle->calculatePerimeter() . '<br />';

echo '<br>';
$square = new Square('Square 01', 4 , 4, 4);
echo 'Square area: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';
echo 'Square resize 50%:<br>';
$square->resizeAble(50);
echo 'Square area after: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter after: ' . $square->calculatePerimeter() . '<br />';

