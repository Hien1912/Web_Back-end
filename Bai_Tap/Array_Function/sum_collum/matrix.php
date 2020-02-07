<?php
    $data=json_decode(file_get_contents("data.json"));
    $rows=$data->row;
    $cols=$data->col;
    $matrix=$data->matrix;
    $sum=null;
    $error=null;
    $j=null;
    if (isset($_GET["col"])) {
        $j=$_GET["col"];
        $error=checkError($j);
        if (!$error) {
            if ($j<$cols) {
                $sum=sumValue($matrix,$j);
            }
            else {
                $error ="Column must be lower $cols";
            }
        }
    }
    if (isset($_GET["reset"])) {
        if ($_GET["reset"]==="ok") {
        file_put_contents("data.json",json_encode([]));
        header('Location: index.php');
        }
    }

    function sumValue($matrix,$j){
        $sum=null;
        foreach ($matrix as $arr) {
            $sum+=$arr[$j];
        }
        return $sum;
    }

    function checkError($value) {
        $error = null;
        $test = filter_var($value, FILTER_VALIDATE_INT);
        if (empty($value)) {
            $error = "Empty!";
        }
        if ($test && $value > 0||$test===0) {
            if ($error === null) {
                $error = null;
            } else {
                $error = null;
            }
        } elseif ($test && $value < 0 || $test === 0) {
            $error ="Must be upper or by 0!";
        } else {
            $error ="Must be integer!";
        }
        return $error;
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Tính tổng các số ở một cột xác định</title>
</head>
<body>
    <fieldset class="show fill">
        <legend>Show Matrix</legend>
        <form method="get">
            <label>Sum Column:</label><br>
            <input type="text" name="col" placeholder="<?=$error?>">
            <a href="<?='/row?='.$_REQUEST['col']?>"><input type="submit" value="Count"></a><br>
            <a href="<?='matrix.php?reset=ok'?>"><input type="button" id="reset" value="New Matrix"></a>
        </form>
        <table class="showtb">
            <tr class="showtr">
            <?php for ($i=0;$i<$cols;$i++ ):?>
                <th class="showtd"><?= $i?></th>
            <?php endfor ?>
            </tr>
            <?php for ($i=0; $i  < $rows; $i++):?>
            <tr class="showtr">
            <?php foreach ($matrix[$i] as $value):?>
                <td class="showtd"><?=$value?></td>
            <?php endforeach ?>
            </tr>
            <?php endfor ?>
            <tr class="showtr">
            <?php for ($i=0;$i<$cols;$i++ ):?>
                <td class="sumcol"><?=($i==$j)?$sum:null?></th>
            <?php endfor ?>
            </tr>
        </table>
    </fieldset>
</body>
</html>