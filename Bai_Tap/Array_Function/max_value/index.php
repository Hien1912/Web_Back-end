<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>[Bài tập] Tìm phần tử lớn nhất trong mảng hai chiều</title>
</head>
<body>
    <?php include "process.php"?>
    <form method="post">
        <div class="row form-group">
            <div class="col-3">
                <label>Total Rows:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="row" placeholder="Rows number" value="<?= $row ?? 3 ?>">
                <span><?= $rowErr ?? "" ?></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3">
                <label>Total Cols:</label>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="col" placeholder="Cols number" value="<?= $col ?? 5 ?>">
                <span><?= $colErr ?? "" ?></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3">
                <label></label>
            </div>
            <div class="col-5">
                <input class="btn btn-outline-success" type="submit" value="Submit">
            </div>
        </div>
    </form>
    <table class="table-bordered">
        <?php 
            if($arr??false){
                for ($i=0; $i < $row; $i++) {
                    echo "<tr>";
                    foreach ($arr[$i] as $key) {
                        echo "<td>$key</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
    <div class="row">
        <div class="col-1">
        <span><?= ($max??null)?"Max is: $max":null ?></span><br>
        </div>
        <div class="col-5">
        <?= $local??null ?>
        </div>
    </div>
</body>
</html>