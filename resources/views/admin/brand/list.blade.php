@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Brand List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Brand', 'key' => 'List'])
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
                        <a href="{{ route('brands.create') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-car" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Founded Year</th>
                                    <th scope="col">Founder Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Banner</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($brands))
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <th scope="row">
                                                {{ ($brands->currentPage() - 1) * $brands->perPage() + $loop->iteration }}
                                            </th>
                                            <td style="max-width: 70px;">{{ $brand->name }}</td>
                                            <td style="max-width: 150px;">{{ $brand->founded_year }}</td>
                                            <td style="max-width: 150px;">{{ $brand->founder_name }}</td>
                                            <td style="max-width: 200px;">{{ \Str::limit($brand->description, 100) }}</td>
                                            <td><img src="{{ asset('images/brand_logos/' . $brand->logo) }}" alt="">
                                            </td>
                                            <td><img src="{{ asset('images/banners/' . $brand->banner) }}" alt=""
                                                    style="width:150px; max-height: 100px;"></td>
                                            <td>
                                                <a href="{{ route('brands.edit', $brand->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="{{ route('brands.delete', $brand->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $brands->links() }}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
