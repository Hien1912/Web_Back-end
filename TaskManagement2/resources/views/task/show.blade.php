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
        <div class="container">
        <a href="{{ route('task.home') }}" class="btn btn-success">Home</a>|
        <a href="{{ route('task.index') }}" class="btn btn-info">Tasks list</a>
        <h2>Task information</h2>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <label for="">Title</label>
                </div>
                <div class="col-6">
                <span>{{ $task->title}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="">content</label>
                </div>
                <div class="col-6">
                <span>{{ $task->content}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="">Due Date</label>
                </div>
                <div class="col-6">
                <span>{{ $task->due_date}}</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>