<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label, input, button{
            margin-top: .5em;
        }
        div button{
            text-align: center;
        }
    </style>
</head>
<body>
    <fieldset style="width: fit-content; margin: 0 auto">
        <legend>Tra từ</legend>
        <form action="dictionary" method="post">
            @csrf
            <div>
                <div>
                    <label>Nhập từ cần tra:</label>
                </div>
                <div>
                    <input type="text" name="word" value="{{ $word }}" pattern="^\w[\w\s]*$" required>
                </div>
                <div style="text-align: center">
                    <button type="submit">Tra ngay</button>
                </div>
            </div>
        </form>
        <div>
            <h3>
                {{ $result }}
            </h3>
        </div>
    </fieldset>
</body>
</html>