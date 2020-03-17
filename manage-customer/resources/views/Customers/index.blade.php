@extends('layouts.app')
@section('title', 'Customer lists')
@section('content')
    <div class="container">
        <nav aria-label="Page breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customer list</li>
            </ol>
        </nav>
        <a class="btn btn-secondary btn-block mb-3 btn-lg" href="{{ route('customer.create') }}">New Customer</a>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead class="thead-dark text-center">
                <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                @if (count($customers) == 0)
                    <tr><td>KHÔNG CÓ DỮ LIỆU</td></tr>
                @else
                 @foreach ($customers as $no => $customer)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td><a href="{{ route('customer.show', ['customer' => $customer->id]) }}">{{ $customer->name }}
                </a> </td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->email }}</td>
                        <td><a href="filter?city_id={{ $customer->City->id }}">{{ $customer->City->name }}</a></td>
                        <td><a href="{{ route('customer.edit',['customer' => $customer->id]) }}" class="btn btn-block btn-secondary">EDIT</a></td>
                        <td>
                            <form method="post" action="{{ route('customer.destroy',['customer' => $customer->id]) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="Submit">DELETE</button>
                            </form>
                        </td>
                    </tr> 
                 @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection