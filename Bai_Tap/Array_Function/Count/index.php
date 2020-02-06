<?php
$count=$string=$char=null;
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $string=getValue($_REQUEST["string"]);
        $char=getValue($_REQUEST["char"]);
        if ($string&&$char) {
            $count="Result: ".substr_count($string,$char);
        }
        if ($string==0||$char==0) {
            $count="Result: ".substr_count($string,$char);
        }
    }
 function getValue($value) {
     $value=htmlspecialchars($value);
     $value=trim($value);
     if (!empty($value)||$value=="0") {
         return $value;
     }
     return null;
 }

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Đếm số lần xuất hiện của ký tự trong chuỗi</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th colspan="2">Đếm số lần xuất hiện của ký tự trong chuỗi</th>
            </tr>
            <tr>
                <th>
                    <label conen>String:</label>
                </th>
                <th>
                <textarea type="text" name="string" placeholder="<?=isset($_REQUEST['string'])?(empty($_REQUEST['string'])?'String not be empty':null):null?>"><?=$string?></textarea>
                </th>
            </tr>
            <tr>
                <th>
                    <label conen>Character:</label>
                </th>
                <th>
                    <input type="text" name="char" placeholder='<?=isset($_REQUEST["string"])?(empty($_REQUEST["char"])?"Character not be empty":null):""?>' value="<?=$char?>">
                </th>
            </tr>
            <tr>
                <th>
                </th>
                <th>
                <input type="submit" value="Count">
                </th>
            </tr>
        </table>
    </form>
    <h2><?=$count?></h2>
</body>
</html>