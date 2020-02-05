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
        if (is_numeric($_POST["number"]) && $num > 2 && intval($_POST["number"]) == $num) {
            $result= ("Các số nguyên tố nhỏ hơn $num là: <br>");
            for ($i = 0; $i < $num; $i++) {
                if (isPrime($i)) {
                    $result.= ($i . " ");
                }
            }
        }
        else {
            $result="Input must be Integer and upper 2";
        }
    }
?>