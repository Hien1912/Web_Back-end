<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $lenght1=htmlspecialchars( $_POST["lenght1"]);
        $lenght2=htmlspecialchars($_POST["lenght2"]);
        if (filter_var($lenght1,FILTER_VALIDATE_INT)&&filter_var($lenght2,FILTER_VALIDATE_INT)) {
            $arr1=createArr($lenght1);
            $arr2=createArr($lenght2);
            $arr3=mergeArr($arr1,$arr2);
            $show1= showArr($arr1);
            $show2=showArr($arr2);
            $show3=showArr($arr3);

        }
    }
    function createArr(int $num){
        $arr=[];
        for ($i=0; $i < $num; $i++) { 
            $arr[$i]=random_int(0,50);
        }
        return $arr;
    }
    function mergeArr($arr1,$arr2){
        $arr=[];
        for ($i=0; $i < count($arr1); $i++) {
            $arr[$i]=$arr1[$i];
        }
        for ($i=0; $i < count($arr2); $i++) {
            $arr[count($arr1)+$i]=$arr2[$i];
        }
        return $arr;
    }
    function showArr($arr){
        $show="<span>";
        foreach ($arr as $key) {
            $show.=" $key";
        }
        $show.="</span>";
        return $show;
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Gộp mảng</title>
</head>
<body>
    <form method="post">
        <label>Lenght array 1:</label><br>
        <input type="text" name="lenght1" placeholder="Array 1" value="<?=$lenght1??""?>"><br>
        <?= isset($lenght1)?(filter_var($lenght1,FILTER_VALIDATE_INT)?null:"<span>Lenght must be integer!</span><br>"):null?>
        <label>Lenght array 2:</label><br>
        <input type="text" name="lenght2" placeholder="Array 2" value="<?=$lenght2??""?>"><br>
        <?= isset($lenght2)?(filter_var($lenght2,FILTER_VALIDATE_INT)?null:"<span>Lenght must be integer!</span><br>"):null?>
        <input type="submit" value="Merge">
    </form>
    <div>
        <div class="create">
            <?=$show1??null?"Array 1: $show1<br>":null?>
            <?=$show2??null?"Array 2: $show2<br>":null?>
            <?=$show3??null?"Array merge: $show3<br>":null?>
        </div>
    </div>
</body>
</html>