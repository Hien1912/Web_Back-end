<?php
    interface Comparator {
        public function compare($circleOne, $circleTwo);
    }

    class Circle {
        private $radius;

        public function __construct($radius)
        {
            $this->radius = $radius;
        }

        public function getRadius()
        {
            return $this->radius;
        }
    }

    class CircleComparator implements Comparator{
        public function compare($circleOne, $circleTwo)
        {
            $radiusOne = $circleOne->getRadius();
            $radiusTwo = $circleTwo->getRadius();
            return $radiusOne <=> $radiusTwo;
        }
    }
    
    $result = null;
    $radius = null;
    if (isset($_POST['submit'])) {
        is_numeric($_POST['radius1']) ? $radius1 = $_POST['radius1'] : $radius = "Radius 1 not a number";
        is_numeric($_POST['radius2']) ? $radius2 = $_POST['radius2'] : $radius .= "<br>Radius 2 not a number";
        if (!$radius) {
            $circleOne = new Circle($radius1);
            $circleTwo = new Circle($radius2);
            $comp = new CircleComparator();
            $result = $comp->compare($circleOne, $circleTwo);
        }
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>[Thực hành] Triển khai interface 'Comparator' để so sánh các lớp hình học</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div>
            <span>Radius circler 1:</span>
            <input type="text" name="radius1">
        </div>
        <div>
            <span>Radius circler 2:</span>
            <input type="text" name="radius2">
        </div><div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    <span class="result"><?= $radius ? $radius : null ?></span>
    <span class="result"><?= $result || $result === 0 ? $result : null ?></span>
</body>
</html>