<?php
include_once('data.php');
session_start();
$arr=[];
if ($_SESSION['arr'] ?? false) {
    $arr = $_SESSION['arr'];
}
else {
    for ($i=0; $i < 100000; $i++) {
        $arr[$i]=random_int(1,10);
    }
    $_SESSION['arr']=$arr;
}

function selection_sort($arr) { 
    for($i = 0; $i < count($arr) ; $i++) { 
        $low = $i; 
        for($j = $i + 1; $j < count($arr) ; $j++){ 
            if ($arr[$j] < $arr[$low]){ 
                $low = $j; 
            } 
        } 
          
        if ($arr[$i] > $arr[$low]) { 
            $tmp = $arr[$i]; 
            $arr[$i] = $arr[$low]; 
            $arr[$low] = $tmp; 
        } 
    } 
}

if (isset($_POST['submit'])) {
    $stopwatch = new StopWatch();
    $stopwatch->start();
    selection_sort($arr);
    $stopwatch->stop();
    $elapsedtime = $stopwatch->getElapsedTime();
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Xây dựng lớp StopWatch</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="submit" value="Submit">
    </form>
    <h1><?= $elapsedtime ?? null ?></h1>
    <h2><?= count($arr) ?></h2>
</body>
</html>