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
                            <div id="errorAlert" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Thông báo thành công khi (thêm/xóa/sửa) thành công --}}
                        @if (session('success'))
                            <div id="successAlert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <a href="{{ route('brands.add') }}" class="btn btn-dark my-2">Add</a>
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
                                            <td style="padding: 12px 5px" scope="row">
                                                {{ ($brands->currentPage() - 1) * $brands->perPage() + $loop->iteration }}
                                            </td>
                                            <td style="max-width: 70px;">{{ $brand->name }}</td>
                                            <td style="max-width: 150px;">{{ $brand->founded_year }}</td>
                                            <td style="max-width: 150px;">{{ $brand->founder_name }}</td>
                                            <td style="max-width: 200px;">{{ \Str::limit($brand->description, 100) }}</td>
                                            <td><img src="{{ asset('images/logos/' . $brand->logo) }}" alt="">
                                            </td>
                                            <td><img src="{{ asset('images/banners/' . $brand->banner) }}" alt=""
                                                    style="width:150px; max-height: 100px; border-radius: 3px;"></td>
                                            <td>
                                                <a href="{{ route('brands.edit', $brand->id) }}"
                                                    class="btn btn-warning mb-1">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1"
                                                    style="width: 70px;" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal" data-id="{{ $brand->id }}"
                                                    data-name="{{ $brand->name }}"
                                                    data-delete-route="brands/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $brands->links() }}
                </div>
                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
                    aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the brand "<span id="entityName"></span>"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
