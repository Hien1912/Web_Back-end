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
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <p class="error">* is required</p>
        <form method="post" action="process.php">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="description"><br>
                <label>List Price:</label>
                <input type="text" name="price">
                <span class="error">*<?php echo $priceErr ?? ""; ?></span>
                <br>
                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"> (%)
                <span class="error">*<?php echo $percentErr ?? ""; ?></span>
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