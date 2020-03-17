@extends('layouts.app')
@section('title', 'edit customer')
@section('content')
<div class="container">
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                <li class="breadcrumb-item"><a href="{{route('customer.index')}}">Customer lists</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit customer</li>
            </ol>
        </nav>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa khách hàng</h1>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session('success') }}
                </div>
            @endif
            <div class="col-12">
                <form method="post" action="{{ route('customer.update', ['customer'=>$customer->id]) }}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="City" class="form-control" name="name" placeholder="Enter name" value="{{ $customer->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $customer->email }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required value="{{ $customer->dob }}">
                        @error('dob')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city_id">City</label>
                        <select id="city_id" class="form-control" name="city_id">
                            @foreach ($cities as $city)
                                <option {{ $city->id == $customer->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
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