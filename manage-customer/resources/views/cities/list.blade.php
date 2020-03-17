@extends('layouts.app')
@section('title', 'Danh sách tỉnh thành')
@section('content')
  <div class="col-12">
      <div class="row">
          <div class="col-12">
              <h1>Danh Sách Khách Hàng</h1>
          </div>
          <table class="table table-striped">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên tỉnh thành</th>
                  <th scope="col">Số khách hàng</th>
                  <th></th>
                  <th></th>
              </tr>
              </thead>
              <tbody>
              @if(count($cities) == 0)
                  <tr>
                      <td colspan="4">Không có dữ liệu</td>
                  </tr>
              @else
                  @foreach($cities as $key => $city)
                      <tr>
                          <th scope="row">{{ ++$key }}</th>
                          <td>{{ $city->name }}</td>
                          <td>{{ count($city->customers) }}</td>
                          <td><a href="{{ route('cities.edit', ['city' => $city->id]) }}" class="btn btn-outline-info">sửa</a></td>
                          <td>
                              <form method="post" action="{{ route('cities.destroy', ['city' => $city->id]) }}">
                                  @csrf
                                  @method('delete')                                    
                              <button class="text-danger btn-outline-danger btn" onclick="return confirm('Bạn chắc chắn muốn xóa?')" data-type="submit">xóa</button>
                              </form>
                            </td>
                      </tr>
                  @endforeach
              @endif
              </tbody>
          </table>
          <a class="btn btn-primary" href="{{ route('cities.create') }}">Thêm mới</a>
      </div>
  </div>
@endsection