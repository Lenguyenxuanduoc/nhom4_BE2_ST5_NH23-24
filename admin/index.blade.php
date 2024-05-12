@extends('nguoidung.layout')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>nguoi dung crud</h2>
                </div>

                <div class="card-body">
                    <a href="{{ url('/nguoidung/create') }}" class="btn btn-success btn-sm" title="add">thêm</a>
                </div>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">tên</th>
                                <th scope="col">email</th>
                                <th scope="col">mật khẩu</th>
                                <th scope="col">action</th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($nguoidung as $value)
                            <tr>
                                <th > {{ $loop->iteration }}  </th>
                                <td>{{ $value->ten }}</td>
                                <td>{{ $value->email }}</td>
                                <td> {{ $value->ten }} </td>
                                <td>
                                        <a href="" title="xem" class="btn btn-success btn-sm"> xem </a>
                                        <a href="" title="xoa" class="btn btn-success btn-sm"> xóa </a>
                                        <a href="" title="sua" class="btn btn-success btn-sm"> sửa </a>

                                </td>

                            </tr>
                           @endforeach
                           
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection