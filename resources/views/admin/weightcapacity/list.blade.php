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
                        <a href="{{ route('weightcapacities.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
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
                                            <td style="padding: 12px 5px" scope="row">
                                                {{ ($weights_capacities->currentPage() - 1) * $weights_capacities->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $weight_capacity->car->name }}</td>
                                            <td>{{ $weight_capacity->fuel_capacity }}</td>
                                            <td>{{ $weight_capacity->cargo_capacity }}</td>
                                            <td>{{ $weight_capacity->curb_weight }}</td>
                                            <td>
                                                <a href="{{ route('weightcapacities.edit', $weight_capacity->id) }}"
                                                    class="btn btn-warning mb-1">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1" style="width: 70px;"
                                                    data-toggle="modal" data-target="#deleteConfirmationModal"
                                                    data-id="{{ $weight_capacity->id }}"
                                                    data-name="{{ $weight_capacity->car->name }}"
                                                    data-delete-route="weightcapacities/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $weights_capacities->links() }}
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
                                Are you sure you want to delete the weight and capacity of car "<span
                                    id="entityName"></span>"?
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
