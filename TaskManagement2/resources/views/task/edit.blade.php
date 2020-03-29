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
        <a href="{{ route('task.index') }}" class="btn btn-success">Home</a>|
        <a href="{{ route('task.index') }}" class="btn btn-info">Tasks list</a>
        <h2>Edit task</h2>
        @if (session('update_success'))
        <div>
            <span class="text-success">{{ session('update_success') }}</span>
        </div>
        @endif
        <form action="{{ route('task.update',['id'=> $task->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="my-input">Title:</label>
                <input class="form-control" type="text" name="title" value="{{ $task->title }}">
            </div>
            <div class="form-group">
                <label for="my-input">Content:</label>
                <textarea name="content" class="form-control">{{ $task->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="my-input">Avatar:</label>
                <input class="form-control" type="file" name="avatar" accept="image/*">
                <span><img src="{{ $task->avatar }}" width="50" height="50"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block btn-lg">Update</button>
            </div>
        </form>
    </div>
</body>
</html>