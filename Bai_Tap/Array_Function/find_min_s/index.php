<?php
    $error = null;
    $arr = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = trim(htmlspecialchars($_POST["number"]));
        $error = !filter_var($number, FILTER_VALIDATE_INT);
        if ($number==="0") {
            $error=false;
        }
        if (!$error) {
            saveDataJSON($number);
        }
        $arr = json_decode(file_get_contents("data.json"));
        if (count($arr)>0) {
            $min = findMin($arr);
        }
    }
    function saveDataJSON($num){
        $temp = json_decode(file_get_contents("data.json"));
        array_push($temp, $num);
        file_put_contents("data.json", json_encode($temp));
    }
    function findMin($array){
        $min = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($min > $array[$i]) {
                $min = $array[$i];
            }
        }
        return $min;
    }
    function clearData() {
        file_put_contents("data.json", json_encode([]));
    }
    if (isset($_GET['submit'])) {
        clearData();
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[*Bài tập] Tìm giá trị nhỏ nhất trong mảng</title>
</head>
<body>
    <form method="post">
        <label>Lenght array 1:</label><br>
        <input type="text" name="number"><br>
        <?= $error ? (empty($number) ? "Empty<br>" : "Not be number!<br>") : null ?>
        <input type="submit" value="Add Number">
    </form>
    <div>
        <div>
            <?php
            if (count($arr) > 0) {
                echo "Array:";
                foreach ($arr as $value) {
                    echo " $value";
                }
                echo "<br>Min = $min";
                echo "<br><a href='index.php?submit=Clear' name='submit'><button>Clear Data</button></a>";
            }
            ?>
        </div>
    </div>
</body>
</html>