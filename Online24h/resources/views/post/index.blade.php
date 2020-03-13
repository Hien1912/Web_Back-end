@extends('layouts.app')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Post</li>
    </ol>
    @if (session()->has('success'))
        <div class="text-success">{{ session('success') }}</div>
    @endif
        <a href="{{ route('post.create') }}" class="btn btn-block btn-success btn-lg mb-4">Create New Post</a>
        <table class="table table-striped">
            <thead class="thead-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Post Title</th>
                    <th>Post Content</th>
                    <th>Avatar</th>
                    <th>Created At</th>
                    <th>Update At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($posts[0]))
                    <tr>
                        <td colspan="7" class="display-3 text-center">Posts table is empty</td>
                    </tr>
                @else
                    @foreach ($posts as $no => $post)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{!! $post->content !!}</td>
                            <td><img src="{{ $post->avatar }}" height="50"></td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td class="text-center">
                                <a href="{{ route('post.show',['post' => $post->id]) }}" class="btn btn-info">VIEW</a>
                                <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-primary">EDIT</a>
                                <a href="#delete{{ $post->id }}" data-toggle="modal" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <div id="delete{{ $post->id }}" class="modal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="{{ route('post.destroy', ['post'=>$post->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <h3 class="text-danger text-center my-4">Do you want to delete {{ $post->title }}?</h3>
                                            <button type="submit" class="btn btn-danger btn-block">Yes</button>
                                            <button class="btn btn-warning btn-block" data-dismiss="modal">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection