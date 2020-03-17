@extends('layouts.app')
@section('title','Home')
@if (Auth::check())
    @section('content')
        <h1 class="display-1 text-center">WELCOME</h1>
        <div class="container">
            <nav class="nav nav-fill">
                <li class="nav-item bg-info">
                    <a class="nav-link text-danger" href="{{ route('customer.index') }}">Customer Lists</a>
                </li>
                <li class="nav-item bg-info">
                    <a class="nav-link text-danger" href="{{ route('customer.create') }}">New Customer</a>
                </li>
            </nav>
        </div>
    @endsection
@endif
