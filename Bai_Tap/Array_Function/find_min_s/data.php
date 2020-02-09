<?php
    session_start();
    $error = null;
    $arr = $_SESSION['number'];

    if (isset($_POST['submit'])) {
        $number = trim(htmlspecialchars($_POST["number"]));
        $error = !(is_numeric($number) && intval($number) == $number);
        if (!$error) {
            array_push($arr, $number);
            $_SESSION['number']=$arr;
        }
        if (count($arr) > 0) {
            $min = findMin($arr);
        }
    }

    function findMin($array){
        $min = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($min > $array[$i]) {
                $min = $array[$i];
            }
        }
        return $min;
    }

    if (isset($_GET['submit'])) {
        $_SESSION['number'] = [];
        header('Location: index.php');
    }
?>