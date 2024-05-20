@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Warranty List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Warranty', 'key' => 'List'])
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
                        <a href="{{ route('warranties.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Car</th>
                                    <th scope="col">Free Maintenance Miles</th>
                                    <th scope="col">Full Warranty Miles</th>
                                    <th scope="col">Powertrain Warranty Miles</th>
                                    <th scope="col">Roadside Warranty Miles</th>
                                    <th scope="col">Corrosion Warranty Miles</th>
                                    <th scope="col">Free Maintenance Months</th>
                                    <th scope="col">Full Warranty Months</th>
                                    <th scope="col">Powertrain Warranty Months</th>
                                    <th scope="col">Roadside Warranty Months</th>
                                    <th scope="col">Corrosion Warranty Months</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($warranties)
                                    @foreach ($warranties as $warranty)
                                        <tr>
                                            <td scope="row" style="width: 5%;">
                                                {{ ($warranties->currentPage() - 1) * $warranties->perPage() + $loop->iteration }}
                                            </td>
                                            <td>{{ $warranty->car->name }}</td>
                                            <td>{{ $warranty->free_maintenance_miles }}</td>
                                            <td>{{ $warranty->full_warranty_miles }}</td>
                                            <td>{{ $warranty->powertrain_warranty_miles }}</td>
                                            <td>{{ $warranty->roadside_warranty_miles }}</td>
                                            <td>{{ $warranty->corrosion_warranty_miles }}</td>
                                            <td>{{ $warranty->free_maintenance_months }}</td>
                                            <td>{{ $warranty->full_warranty_months }}</td>
                                            <td>{{ $warranty->powertrain_warranty_months }}</td>
                                            <td>{{ $warranty->roadside_warranty_months }}</td>
                                            <td>{{ $warranty->corrosion_warranty_months }}</td>
                                            <td>
                                                <a href="{{ route('warranties.edit', $warranty->id) }}"
                                                    class="btn btn-warning mb-2" style="width: 70px;">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1" style="width: 70px;"
                                                    data-toggle="modal" data-target="#deleteConfirmationModal"
                                                    data-id="{{ $warranty->id }}" data-name="{{ $warranty->car->name }}"
                                                    data-delete-route="warranties/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $warranties->links() }}
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
                                Are you sure you want to delete the warranty of car "<span id="entityName"></span>"?
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
