<?php
include_once('Triangle.class.php');

if (isset($_POST["submit"])) {
    $error = null;
    $color=$_POST['color'];
    is_numeric($_POST["side1"]) ? $side1 = $_POST["side1"] : $error = "Side 1 not a number!<br>";
    is_numeric($_POST["side2"]) ? $side2 = $_POST["side2"] : $error .= "Side 2 not a number!<br>";
    is_numeric($_POST["side3"]) ? $side3 = $_POST["side3"] : $error .= "Side 3 not a number!";
    $error ? $error : ($error = ($side1 + $side2 > $side3 && $side2 + $side3 > $side1 && $side3 + $side1 > $side2) ? null : "Not a triangle");
    if (!$error) {
        $triangle = new Triangle($color, $side1, $side2, $side3);
    }
}

?>