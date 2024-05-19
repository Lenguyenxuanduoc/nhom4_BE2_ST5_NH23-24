@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Performance List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Performance', 'key' => 'List'])
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
                        <a href="{{ route('performances.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Car</th>
                                    <th scope="col">Engine</th>
                                    <th scope="col">Horsepower</th>
                                    <th scope="col">Trim</th>
                                    <th scope="col">Torque</th>
                                    <th scope="col">Cylinders</th>
                                    <th scope="col">Standard MPG</th>
                                    <th scope="col">Transmission</th>
                                    <th scope="col">Transmission Type</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($performances)
                                    @foreach ($performances as $performance)
                                        <tr>
                                            <td scope="row" style="width: 5%;">
                                                {{ ($performances->currentPage() - 1) * $performances->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $performance->car->name }}</td>
                                            <td>{{ $performance->engine }}</td>
                                            <td>{{ $performance->horsepower }}</td>
                                            <td>{{ $performance->trim }}</td>
                                            <td>{{ $performance->torque }}</td>
                                            <td>{{ $performance->cylinders }}</td>
                                            <td>{{ $performance->standard_mpg }}</td>
                                            <td>{{ $performance->transmission }}</td>
                                            <td>{{ $performance->transmission_type }}</td>
                                            <td>
                                                <a href="{{ route('performances.edit', $performance->id) }}"
                                                    class="btn btn-warning mb-2" style="width: 70px;">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1" style="width: 70px;"
                                                    data-toggle="modal" data-target="#deleteConfirmationModal"
                                                    data-id="{{ $performance->id }}" data-name="{{ $performance->car->name }}"
                                                    data-delete-route="performances/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $performances->links() }}
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
                                Are you sure you want to delete the performance of car "<span id="entityName"></span>"?
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
