@extends('layouts.app')
@section('title', 'Add new customer')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
        <li class="breadcrumb-item"><a href="{{route('customer.index')}}">Customer lists</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add new Customer</li>
    </ol>
    </nav>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            @if (Session::has('success'))
            <div>{{Session('success')}}</div>
            @endif
            <div class="col-12">
                <form method="post" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required value="{{ date('Y-m-d') }}">
                        @error('dob')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city_id">City</label>
                        <select id="city_id" class="form-control" name="city_id">
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection