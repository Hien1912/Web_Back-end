<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="simpleCalc/calculate" method="post">
            @csrf
        <div>
            <div>
                <label>Hạng tử 1:</label>
            </div>
            <div>
                <input type="text" name="first">
            </div>
        </div>
        <div>
            <div>
                <label>Phép tính:</label>
            </div>
            <div>
                <select name="operation">
                    <option value="+">Cộng</option>
                    <option value="-">Trừ</option>
                    <option value="*">Nhân</option>
                    <option value="/">Chia</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label>Hạng tử 2:</label>
            </div>
            <div>
                <input type="text" name="second">
            </div>
        </div>        
        <div>
            <button type="submit">Calculate</button>
        </div>
    </form>
    <div>
        @if (isset($result))
            @if (is_numeric($result))
                Kết quả: {{ $result }}            
            @else
                Lỗi đâu đó rồi!
            @endif
        @endif
    </div>
    </div>
</body>
</html>