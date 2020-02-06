<?php
$array = json_decode(file_get_contents("data.json"));
if (isset($_POST["value"])) {
    $value = getValue($_POST["value"]);
    if (!$value&&$value!=0) {
        $newArr="Value not be empty";
    }
    elseif (isExist($value, $array)) {
        $arr = [];
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $value) {
                continue;
            } else {
                array_push($arr, $array[$i]);
            }
        }
        $newArr = "Mảng sau khi xóa $value: " . showArr($arr);
    } else {
        $newArr = "$value không tồn tại trong mảng";
    }
}
function showArr($arr){
    $show = '<table><tr>';
    foreach ($arr as $key) {
        $show .= "<td>$key</td>";
    }
    $show .= "</tr></table>";
    return $show;
}
function isExist($value, $arr){
    foreach ($arr as $key) {
        if ((string) $key === $value) {
            return true;
        }
    }
    return false;
}

 function getValue($value) {
     $value=htmlspecialchars($value);
     $value=trim($value);
     if (!empty($value)||$value=="0") {
         return $value;
     }
     return null;
 }
$show = showArr($array);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Xoá phần tử khỏi mảng</title>
</head>
<body>
    <form method="post">
        <label>Remove value:</label>
        <input type="text" name="value">
        <input type="submit" value="Remove">
    </form>
    <div>
        <?= "Mảng ban đầu: $show" ?>
        <?= $newArr ?? null ?>
    </div>
</body>
</html>