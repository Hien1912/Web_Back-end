<?php
$operator = "+";
$result = $error = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST["first"];
    $second = $_POST["second"];
    $operator = $_POST["operator"];
    $firstErr = is_numeric($first) ? null : "First operand not be number!";
    $secondErr = is_numeric($second) ? null : "Second operand not be number!";
    if (is_numeric($first) && is_numeric($second)) {
        try {
            if ($second == 0) {
                throw new Exception("by Zero");
            } 
            else {
                switch ($operator) {
                    case '+':
                        $result = $first + $second;
                        break;
                    case '-':
                        $result = $first - $second;
                        break;
                    case '*':
                        $result = $first * $second;
                        break;
                    case '/':
                        if ($first == 0) {
                            throw new Exception("by Zero");
                        }
                        else {
                            $result = $first + $second;
                        }
                        break;
                }
            }
        } catch (Exception $th) {
            $error = $th->getMessage();
        }
    }
}
?>