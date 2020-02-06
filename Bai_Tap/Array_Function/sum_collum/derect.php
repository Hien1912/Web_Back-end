<?php
$error = null;
if (!empty($_POST)) {
    $matrix = null;
    $arr = $_POST;
    $error = checkError($arr);
    $url="http://"."$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url=str_replace("index.php","matrix.php",$url);
    if ($error === null) {
        $row = (int) $arr["row"];
        $col = (int) $arr["col"];
        $matrix = generateMatrix($row, $col);
        $data=[
            'row'=>$row,
            'col'=>$col,
            'matrix'=>$matrix
        ];
        file_put_contents("data.json",json_encode($data));
        header('Location: '.$url);
    }
}

function generateMatrix($row, $col) {
    $matrix = null;
    for ($i = 0; $i < $row; $i++) {
        $matrix[$i]=null;
        for ($j = 0; $j < $col; $j++) {
            $matrix[$i][$j] = random_int(0, 10);
        }
    }
    return $matrix;
}

function checkError($arr) {
    $error = null;
    foreach ($arr as $key => $value) {
        $test = filter_var($value, FILTER_VALIDATE_INT);
        if (empty($value)) {
            $error["$key"] = "Empty!";
        }
        if ($test && $value > 0) {
            if ($error === null) {
                $error = null;
            } else {
                $error["$key"] = null;
            }
        } elseif ($test && $value < 0 || $test === 0) {
            $error["$key"] = ucfirst($key) . " must be upper 0!";
        } else {
            $error["$key"] = ucfirst($key) . " must be integer!";
        }
    }
    return $error;
}
