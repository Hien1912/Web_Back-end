<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Ứng dụng Calculator</title>
</head>
<body>
    <?php include "process.php" ?>
    <div id="content">
        <h1>Simple Calculator</h1>
        <fieldset>
            <legend>Calculator</legend>
            <form method="post">
                <div id="data">
                    <label>First operand:</label>
                    <input type="number" name="first"><br>
                    <label>Operator:</label>
                    <select name="operator" id="operator">
                        <option value="+">Addition</option>
                        <option value="-">Subtraction</option>
                        <option value="*">Multiplication</option>
                        <option value="/">Divition</option>
                    </select>
                    <br>
                    <label>Second operand:</label>
                    <input type="number" name="second">
                    <br>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate">
                </div>
            </form>
        </fieldset>
        <h1>Result:</h1>
        <p><?php echo $error ?? ($result == null ? "" : ($first . " $operator " . $second . " = " . $result)) ?></p>
    </div>
</body>
</html>