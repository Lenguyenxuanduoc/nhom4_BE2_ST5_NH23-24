@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Exterior List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Exterior', 'key' => 'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        {{-- Thông báo lỗi khi (thêm/xóa/sửa) không thành công --}}
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Thông báo thành công khi (thêm/xóa/sửa) thành công --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <a href="{{ route('exteriors.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-5">
                        <table class="table" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Car</th>
                                    <th scope="col">Length</th>
                                    <th scope="col">Width</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">Wheelbase</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($exteriors)
                                    @foreach ($exteriors as $exterior)
                                        <tr>
                                            <th scope="row" style="width: 5%;">{{ $loop->iteration }}</th>
                                            <td style="width: 20%;">{{ $exterior->car->name }}</td>
                                            <td style="width: 15%;">{{ $exterior->length }}</td>
                                            <td style="width: 15%;">{{ $exterior->width }}</td>
                                            <td style="width: 15%;">{{ $exterior->height }}</td>
                                            <td style="width: 15%;">{{ $exterior->wheelbase }}</td>
                                            <td style="width: 15%;">
                                                <a href="{{ route('exteriors.edit', $exterior->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('exteriors.delete', $exterior->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $exteriors->links() }}
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
