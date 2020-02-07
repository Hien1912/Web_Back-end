<?php
class Rectangle
{
    public float $width;
    public float $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return (($this->width) * ($this->height));
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle: Width: " . $this->width . " Height: " . $this->height . "<br>";
    }
}

$error=null;
if (isset($_POST["submit"])) {
    $width=(float) $_POST["width"];
    $height=(float) $_POST["height"];
    $error["width"]=checkInput($width,0);
    $error["height"]=checkInput($height,0);
    if ($error["height"]===$error["width"]&&$error["width"]==null) {
        $rect=new Rectangle($width,$height);
        $flag=$rect->display();
        $area=$rect->getArea();
        $perimeter=$rect->getPerimeter();
    }
}

function checkInput($value,$min=-INF,$max=INF)
{
    if ($value>$min&&$value<$max) {
        return null;
    }
    else{
        return "Value is not valid!";
    }
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[Thực hành] Lớp hình chữ nhật</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div class="input">
            <div class="label">
                <label>Widht:</label>
            </div>
            <div class="data">
                <input type="text" name="width">
            </div>
            <div><?= $error["width"] ?? null?></div>
        </div>
        <div>
            <div class="label">
                <label>Height:</label>
            </div>
            <div class="data">
                <input type="text" name="height">
            </div>
            <div><?= $error["height"] ?? null?></div>
        </div>
        <div class="submit">
            <div></div>
            <div>
                <input type="submit" name="submit" value="Rectangle">
            </div>
        </div>
    </form>
    <h2><?=($flag??null) ? $flag."Area: " . $area ." Perimater: " . $perimeter : null?></h2>
</body>
</html>