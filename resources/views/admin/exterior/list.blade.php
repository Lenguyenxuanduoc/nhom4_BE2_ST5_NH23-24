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
                        <a href="{{ route('exteriors.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
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
                                            <td style="padding: 12px 5px" scope="row">
                                                {{ ($exteriors->currentPage() - 1) * $exteriors->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $exterior->car->name }}</td>
                                            <td>{{ $exterior->length }}</td>
                                            <td>{{ $exterior->width }}</td>
                                            <td>{{ $exterior->height }}</td>
                                            <td>{{ $exterior->wheelbase }}</td>
                                            <td style="width: 20%;">
                                                <a href="{{ route('exteriors.edit', $exterior->id) }}"
                                                    class="btn btn-warning mb-1">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1" style="width: 70px;"
                                                    data-toggle="modal" data-target="#deleteConfirmationModal"
                                                    data-id="{{ $exterior->id }}" data-name="{{ $exterior->car->name }}"
                                                    data-delete-route="exteriors/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $exteriors->links() }}
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
                                Are you sure you want to delete the exterior of car "<span id="entityName"></span>"?
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
