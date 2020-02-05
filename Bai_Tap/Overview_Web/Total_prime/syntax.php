<?php
    function isPrime($n){
        if ($n < 2) {
            return false;
        }
        // check so nguyen to khi n >= 2
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $num= (float) $_POST["number"];
        if (is_numeric($_POST["number"]) && $num > 0 && intval($_POST["number"]) == $num) {  
            $result= (" $num số nguyên tố đầu tiên là: <br>");
            $count=0;
            for ($i = 0;$count<$num;$i++) {
                if (isPrime($i)) {
                    $result .= $i . " ";
                    $count++;
                }
            }
        }
        else {
            $result="Input must be Integer and upper 0";
        }
    }
?>