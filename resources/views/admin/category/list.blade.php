@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Category List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Category', 'key' => 'List'])
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
                        <a href="{{ route('categories.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-5">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($categories)
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row" style="width: 5%;">
                                                {{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</th>
                                            <td style="width: 30%;">{{ $category->name }}</td>
                                            <td style="width: 20%;">
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $categories->links() }}
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
