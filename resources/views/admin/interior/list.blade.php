@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Interior List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Interior', 'key' => 'List'])
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
                        <a href="{{ route('interiors.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Car</th>
                                    <th scope="col">Front Headroom</th>
                                    <th scope="col">Rear Headroom</th>
                                    <th scope="col">Front Legroom</th>
                                    <th scope="col">Rear Legroom</th>
                                    <th scope="col">Front Shoulder Room</th>
                                    <th scope="col">Rear Shoulder Room</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($interiors)
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($interiors as $interior)
                                        <tr>
                                            <th scope="row">
                                                {{ ($interiors->currentPage() - 1) * $interiors->perPage() + $loop->iteration }}
                                            </th>
                                            <td>{{ $interior->car->name }}</td>
                                            <td>{{ $interior->front_headroom }}</td>
                                            <td>{{ $interior->rear_headroom }}</td>
                                            <td>{{ $interior->front_legroom }}</td>
                                            <td>{{ $interior->rear_legroom }}</td>
                                            <td>{{ $interior->front_shoulder_room }}</td>
                                            <td>{{ $interior->rear_shoulder_room }}</td>
                                            <td>
                                                <a href="{{ route('interiors.edit', $interior->id) }}"
                                                    class="btn btn-warning mb-1" style="width: 70px">Edit</a>
                                                <a href="{{ route('interiors.delete', $interior->id) }}"
                                                    class="btn btn-danger mb-1" style="width: 70px">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $interiors->links() }}
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
