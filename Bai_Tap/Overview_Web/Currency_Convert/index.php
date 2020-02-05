<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Ứng dụng chuyển đổi tiền tệ</title>
</head>
<body>
    <fieldset>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rate = 23000;
            if (is_numeric($_POST["amount"])) {
                $amount = (int) $_POST["amount"];
                $cfrom = $_POST["cfrom"];
                $cto = $_POST["cto"];
                $result = null;
                switch ($cfrom . $cto) {
                    case 'VNDUSD':
                        $result = $amount / 23000;
                        break;
                    case 'USDVND':
                        $result = $amount * 23000;
                        break;
                    default:
                        $result = $amount;
                        break;
                }
            }
            elseif($_POST["amount"]==null){
                $error = "Amount is null";
            }
            else {
                $error = "Amount must be number";
                
            }
        }
        ?>
        <legend>Currency Converter</legend>
        <div class="content">
            <form method="post">
                <label>Amount:</label>
                <input type="text" name="amount" value="<?= $amount ?? null ?>">
                <label>From:</label>
                <select name="cfrom" id="cfrom">
                    <option value="VND">VNĐ</option>
                    <option value="USD">USD</option>
                </select>
                <label>To:</label>
                <select name="cto" id="cto">
                    <option value="USD">USD</option>
                    <option value="VND">VNĐ</option>
                </select>
                <input type="submit" value="Convert">
                <label>Result: <span><?= $result ?? $error ?? "" ?></span></label>
            </form>
        </div>
    </fieldset>
</body>
</html>