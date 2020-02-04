<?php
    $error=$second=$first=$operator=$result=null;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["first"]==''||$_POST["second"]==''){
            if($_POST["first"]==''&&$_POST["second"]==''){
                $error="First and Second operand is null";
            }
            elseif($_POST["first"]==''){
                $error="First operand is null";
            }
            else{
                $error="Second operand is null";
            }
        }
        else{
            $first=(int) $_POST["first"];
            $second=(int) $_POST["second"];
            $operator=$_POST["operator"];
            switch($operator){
                case "+":
                    $result = $first + $second;
                    break;
                case "-":
                    $result = $first - $second;
                    break;
                case "*":
                    $result = $first * $second;
                    break;
                case "/":
                    $result = $first / $second;
                    break;
            }
        }
    }
?>