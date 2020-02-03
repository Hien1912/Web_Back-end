<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng đọc số thành chữ</title>
    <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
</head>
<body>
    <h2>Số thành chữ</h2>
    <form method="POST">
        <input type="text" name="search" placeholder="Nhập số cần chuyển"/>
        <input type = "submit" id = "submit" value = "Chuyển"/>
    </form>
    <?php
    $first = [
        0 => "",
        1 => "One",
        2 => "Twent",
        3 => "Thirt",
        4 => "Fort",
        5 => "Fift",
        6 => "Sixt",
        7 => "Sevent",
        8 => "Eight",
        9 => "Ninet",
    ];

    $second = [
        0 => "",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchword = $_POST["search"]; 
            $flag = 0;
            if($searchword>=0){
                if($searchword < 10 && $searchword >= 0){
                    switch($searchword){
                        case "0":
                            echo "Zero";
                            break;
                        case 1:
                            echo "One";
                            break;
                        case 2:
                            echo "Two";
                            break;
                        case 3:
                            echo "Three";
                            break;
                        case 4:
                            echo "Four";
                            break;
                        case 5:
                            echo "Five";
                            break;
                        case 6:
                            echo "Six";
                            break;
                        case 7:
                            echo "Seven";
                            break;
                        case 8:
                            echo "Eight";
                            break;
                        case 9:
                            echo "Nine";
                            break;
                    }
                }
                else if ($searchword<20) {
                    switch ($searchword) {
                        case 10:
                            echo "Ten";
                            break;
                        case 11:
                            echo "eleven";
                            break;
                        case 12:
                            echo "twelve";
                            break;
                        default:
                            foreach ($first as $number => $word) {
                                if($number==$searchword[1]){
                                    echo $word."een";
                                }
                            }
                            break;
                    }
                }
                else if ($searchword<100) {
                    foreach ($first as $number => $word) {
                        if($searchword[0]==$number){
                            foreach ($second as $num => $chara) {
                                if($searchword[1]==$num){
                                    echo $word."y-".$chara;
                                }
                            }
                        }
                    }
                }
                else if($searchword>=1000){
                    echo "Out of ability";
                }
                else{
                    foreach ($first as $number => $word) {
                        if($searchword[1]==$number){
                            foreach ($second as $num => $chara) {
                                if($searchword[2]==$num){
                                    foreach ($second as $i => $v) {
                                        if($searchword[0]==$i){
                                        if($number==0&&$num==0){
                                            echo $v." hundred";
                                        }
                                        else {
                                            echo $v." hundred and ".$word."y-".$chara;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    ?>
</body>
</html>