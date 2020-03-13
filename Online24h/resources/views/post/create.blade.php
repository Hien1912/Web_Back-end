@extends('layouts.app')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
    @if (session()->has('success'))
        <div class="text-success">{{ session('success') }}</div>
    @endif
    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row row-cols-3">
            <div class="form-group col">
                <label>Title:</label>
                <input class="form-control" type="text" name="title">
                @error('title')
                    <span class="text-danger">{{ $message  }}</span>
                @enderror
            </div>
            <div class="form-group custom-file">
                <label for="my-input">Avatar:</label>
                <input onchange="uploadAvatar(this)" class="form-control-file" type="file" name="avatar">                
                @error('avatar')
                    <span class="text-danger">{{ $message  }}</span>
                @enderror
            </div>
            <div>
                <label>Preview:</label>
                <div>
                <img class="img" id="upload-avatar" src="" alt="avatar" height="50">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Content:</label>
            <textarea id="ckeditor" class="form-control" name="content"></textarea>
            @error('content')
                <span class="text-danger">{{ $message  }}</span>
            @enderror
        </div>
        <button class="btn btn-primary btn-block" type="submit">SAVE</button>
    </form>
</div>
@endsection