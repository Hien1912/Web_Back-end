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
        <a href="{{ route('task.home') }}" class="btn btn-success">Home</a>|
        <a href="{{ route('task.index') }}" class="btn btn-info">Tasks list</a>
        <h2>Add new task</h2>
        @if (session('create_success'))
            <div class="row">
                <span class="text-info">{{ session('create_success') }}</span>
            </div>
        @endif
        <form action="{{ route('task.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title:</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label>Content:</label>
                <textarea name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
               <label>Avatar</label>
                <input class="form-control-file" type="file" name="avatar" accept="image/*">
            </div>
            <div class="form-group">
                <label>Due Date:</label>
                <input class="form-control" type="date" name="due_date">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block btn-lg">Create</button>
            </div>
        </form>
    </div>
</body>
</html>