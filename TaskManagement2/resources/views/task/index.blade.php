@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('task.index') }}" class="btn btn-success">Home</a>|
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
                <td>{{ $task->update_at }}</td>
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
@endsection