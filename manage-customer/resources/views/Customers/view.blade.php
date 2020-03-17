@extends('layouts.app')
@section('title', 'view customer')
@section('content')
<div class="container">
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                <li class="breadcrumb-item"><a href="{{route('customer.index')}}">Customer lists</a></li>
                <li class="breadcrumb-item active" aria-current="page">View customer</li>
            </ol>
        </nav>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thông tin khách hàng</h1>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Tên khách hàng: </label>
                    <span>{{ $customer->name }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email: </label>
                    <span>{{ $customer->email }}</span>
                </div>
                <div class="form-group">
                    <label>Ngày sinh: </label>
                    <span>{{ $customer->dob }}</span>
                </div>
                <div class="form-group">
                    <label>Thành phố: </label>
                    <span>{{ $customer->City->name }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection