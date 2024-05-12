@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Weight Capacity List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Weight Capacity', 'key' => 'List'])
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
                        <a href="{{ route('weightcapacities.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Car</th>
                                    <th scope="col">Fuel Capacity</th>
                                    <th scope="col">Cargo Capacity</th>
                                    <th scope="col">Curb Weight</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($weights_capacities)
                                    @foreach ($weights_capacities as $weight_capacity)
                                        <tr>
                                            <td>{{ $weight_capacity->car->name }}</td>
                                            <td>{{ $weight_capacity->fuel_capacity }}</td>
                                            <td>{{ $weight_capacity->cargo_capacity }}</td>
                                            <td>{{ $weight_capacity->curb_weight }}</td>
                                            <td>
                                                <a href="{{ route('weightcapacities.edit', $weight_capacity->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('weightcapacities.delete', $weight_capacity->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
