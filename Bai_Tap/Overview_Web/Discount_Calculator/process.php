<?php
$description = test_input($_POST["description"]);
$price = test_input($_POST["price"]);
$percent = test_input($_POST["discount_percent"]);
$amount=$price*$percent/100;
$discount=$description - $amount;
require "display.php";
