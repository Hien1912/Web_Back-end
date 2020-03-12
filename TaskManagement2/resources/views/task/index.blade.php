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
        <a href="{{ route('task.create') }}" class="btn btn-info">Add new task</a>
        <h2>Tasks list</h2>
        <table class="table table-primary">
            <thead class="thead-dask">
                <tr>
                    <th>#</th>
                    <th>Task title</th>
                    <th>Content</th>
                    <th>Created</th>
                    <th>Due Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($tasks[0]))
                <tr>
                    <td>Tasks is Empty</td>
                </tr>
                @else
                    @foreach ($tasks as $no => $task)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td><img src="{{ $task->avatar }}" width="50" height="50"></td>
                           
                            <td>{{ $task->created_at }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td>
                                <a href="{{ route('task.show',['id'=> $task->id]) }}" class="btn btn-info">Show</a>|
                                <a href="{{ route('task.edit',['id'=> $task->id]) }}" class="btn btn-warning">Edit</a>|
                                <a href="#delete{{ $task->id }}" class="btn btn-danger" data-toggle="modal">Delete</a>
                            </td>
                            <div id="delete{{ $task->id }}" class="modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <h2>Want to delete?</h2>
                                            <form action="{{ route('task.delete',['id' => $task->id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>