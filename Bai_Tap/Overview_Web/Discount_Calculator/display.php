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
        <label>Product&nbsp;Description:&nbsp;<?= $description ?></label><br>
        <label>Price:&nbsp;<?= "$" . $price ?></label><br>
        <label>Discount Percent:&nbsp;<?= $percent . "%" ?></label><br>
        <label>Discount Amount:&nbsp;<?= "$" . $amount ?></label><br>
        <label>Discount Price:&nbsp;<?= "$" . $discount ?></label><br>
    </div>
</body>
</html>