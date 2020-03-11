<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Task Managenment</h1>
            <p>Welcome</p>
        </div>
        <div class="row row-cols-2">
            <div class="col text-center">
                <a href="{{ route('task.create') }}" class="btn btn-info">Add new task</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('task.index') }}" class="btn btn-info">Show task list</a>
            </div>
        </div>
    </div>
</body>
</html>