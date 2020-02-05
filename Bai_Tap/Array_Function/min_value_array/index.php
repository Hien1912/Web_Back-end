<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Tìm giá trị nhỏ nhất trong mảng sử dụng phương thức</title>
</head>
<body>
    <?php
        function findMin($array){
                $min=$array[0];
                for ($i=1; $i < count($array); $i++) {
                    if ($min>$array[$i]) {
                        $min=$array[$i];
                    }
                }
                return $min;
            }

            $array;
            
            for ($i=0; $i < 10; $i++) {
                $array[$i]=random_int(0,100);
            }

            try {
                if (!is_numeric(findMin($array))) {
                    throw new Exception("Error Array");
                }
                else {
                    echo findMin($array);
                }
            } catch (Exception $th) {
                echo $th->getMessage();
            }
    ?>
</body>
</html>