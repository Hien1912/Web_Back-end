<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Ứng dụng Product Discount Calculator</title>
</head>
<body>
    <?php
    $percentErr = $priceErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pri = $_POST["price"];
        $dis = $_POST["discount_percent"];
        if (empty($pri) || empty($dis)) {
            if (empty($pri)) {
                $priceErr = "Price is required";
            }
            if (empty($dis)) {
                $percentErr = "Discount Percent is required";
            }
        } else {
            require "process.php";
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
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="description"><br>
                <label>List Price:</label>
                <input type="text" name="price">
                <span class="error">*<?php echo $priceErr;?></span>
                <br>
                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"> (%)
                <span class="error">*<?php echo $percentErr;?></span>
                <br>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount">
            </div>
        </form>
    </div>
</body>
</html>