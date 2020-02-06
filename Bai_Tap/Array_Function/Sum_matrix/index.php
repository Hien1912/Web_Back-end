<?php
$error=$lenght=null;
if (isset($_REQUEST["lenght"])) {
    $lenght=trim(htmlspecialchars($_REQUEST["lenght"]));
    if (intval($lenght)&&$lenght>0) {
        $lenght=(int)$lenght;
        $result=showMatrix($lenght);
    }else {
        $error=empty($lenght)&&$lenght!="0"?"Empty!":"Must be integer and upper 0";
        $lenght=null;
    }
}

function showMatrix($lenght){
    $tb = "<table>";
    $sum=0;
    $matrix=[];
    for ($i=0; $i < $lenght; $i++) {
        $matrix[$i]=[];
        $tb.= "<tr>";
        for ($j=0; $j < $lenght; $j++) {
            if ($i===$j) {
                $matrix[$i][$j]=random_int(0,100);
                $sum+=$matrix[$i][$j];
                $tb.= "<td class='cheo'>".$matrix[$i][$j]."</td>";
                continue;
            }
            $matrix[$i][$j]=random_int(0,100);
            $tb.= "<td>".$matrix[$i][$j]."</td>";
        }
        $tb.= "</tr>";
    }
    $tb.= "</table>";
    $result=[
        "matrix" => $matrix,
        "show" => $tb,
        "sum" => $sum
    ];
    return $result;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] mảng hai chiều - tính tổng các số ở đường chéo chính của ma trận vuông</title>
</head>
<body>
    <form method="post">
        <label>Edge lenght:</label><br>
        <input type="text" name="lenght" placeholder="<?=$error??null?>">
        <input type="submit" value="Create Matrix">
    </form>
    <div>
        <?= $lenght?"<h2>Sum: ".$result['sum']."</h2>":null?>
        <?= $lenght?"Matrix:".$result["show"]:null?>
    </div>
</body>
</html>