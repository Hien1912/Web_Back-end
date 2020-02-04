<?php
$percentErr = $priceErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pri = $_POST["price"];
    $dis = $_POST["discount_percent"];
    if (empty($pri) || empty($dis)||!is_numeric($pri)||!is_numeric($dis)) {
        if (empty($pri)) {
            $priceErr = "Price is required";
        }
        if (empty($dis)) {
            $percentErr = "Discount Percent is required";
        }
        if (!is_numeric($pri)) {
            $priceErr = "Price is not number";
        }
        if (!is_numeric($dis)) {
            $percentErr = "Discount Percent is not number";
        }
        require "index.php";
    }
    else {
        $description = test_input($_POST["description"]);
        $price = test_input($_POST["price"]);
        $percent = test_input($_POST["discount_percent"]);
        $amount=$price*$percent/100;
        $discount=$price - $amount;
        require "display.php";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return (int) $data;
}
?>
