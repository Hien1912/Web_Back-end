<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="favicon.ico">
    <title>Document</title>
    <style>
        input,label{
            margin: .5em;

            text-align:left;
        }
    </style>
</head>
<body>
    <h1>Discount Calculator</h1>
    <form action="display-discount" method="post">
        @csrf
        <table>
            <tr>
                <td><label>Description:</label></td>
                <td>
                <input type="text" name="name" value="{{ $name ?? null }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>List Price:</label>
                </td>
                <td>
                <input type="text" name="price" value="{{ $priceR ?? null }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Discount Percent:</label>
                </td>
                <td>
                    <input type="text" name="persent" value="{{ $persent ?? null }}">%
                </td>
            </tr>
            <tr style="text-align:center">
                <td colspan="2">
                    <button type="submit">Calculate</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $error ?? '' }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>{{ isset($amount) ? "Discount Amount:" : "" }}</label>
                </td>
                <td>
                    <label> {{ $amount ?? "" }} </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>{{ isset($priceF) ? "Discount Price:" : "" }}</label>
                </td>
                <td>
                    <label> {{ $priceF ?? "" }} </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>