<?php
include_once('StopWatch.class.php');

// Create new array

$arr=[];
for ($i=0; $i < 10000; $i++) {
    $arr[$i] = random_int(1,10);
}

// Function selection sort array

function selection_sort($arr) { 
    for($i = 0; $i < count($arr) ; $i++) { 
        $low = $i; 
        for($j = $i + 1; $j < count($arr); $j++){ 
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

// Calculate elapsedTime and destroy session

if (isset($_POST['submit'])) {
    $stopwatch = new StopWatch();
    $stopwatch->start();
    selection_sort($arr);
    $stopwatch->stop();
    $elapsedtime = $stopwatch->getElapsedTime();
}

?>