<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Hiển thị các loại hình</title>
</head>
<body>
    <fieldset id="content">
        <legend>Menu</legend>
        <form method="post">
            <div id="data">
                <span>Shape type:</span>
                <select name="shape" id="shape">
                    <option value="rect">Rectangle</option>
                    <option value="topleft">Square triangle (top-left)</option>
                    <option value="topright">Square triangle (top-right)</option>
                    <option value="bottomleft">Square triangle (bottom-left)</option>
                    <option value="bottomright">Square triangle (bottom-right)</option>
                    <option value="isosceles">Isosceles triangle</option>
                </select>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Print">
            </div>
        </form>
    </fieldset>
    <?php include "draw.php" ?>
</body>
</html>