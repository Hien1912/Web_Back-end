@extends('layouts.app')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
        <li class="breadcrumb-item active">View</li>
    </ol>
        <h2 class="text-center">{{ $post->title }}</h2>
        <ol class="nav navbar">
            <li class="">Created at: {{ $post->created_at }}</li>
            <li class="">Update at: {{ $post->updated_at }}</li>
        </ol>
        <p>{!! $post->content !!}</p>
    </div>
@endsection