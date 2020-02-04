<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Ứng dụng Future Value Calculator</title>
    <title>Future Value Calculator</title>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <p class="error">Number of years is a required field</p>
        <form action="display_result.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="<?php isset($investment) ? $investment : '12' ?>" /><br />
                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="<?php isset($rate) ? $rate : '3' ?>" /><br />
                <label>Number of Years:</label>
                <input type="text" name="years" value="<?php isset($years) ? $rateyears : '2' ?>" require />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>
        </form>
    </div>
</body>
</html>