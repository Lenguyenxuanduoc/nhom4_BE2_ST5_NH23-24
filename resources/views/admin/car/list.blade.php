@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Car List</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Car', 'key' => 'List'])
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

                    <div class="col-md-4">
                        <a href="{{ route('cars.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <form action="{{route('cars.by.category')}}" method="post">
                                @csrf
                                <div class="row">
                                    <select class="form-control my-2 col-md-8" name="category_id">
                                        <option value="">-- Categories --</option>
                                        @if (!empty($categories))
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class=" col-md-4 my-2">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <form action="{{route('cars.by.brand')}}" method="post">
                                @csrf
                                <div class="row">
                                    <select class="form-control my-2 col-md-8" name="brand_id">
                                        <option value="">-- Brands --</option>
                                        @if (!empty($brands))
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class=" col-md-4 my-2">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-car" id="carTable" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">MSRP</th>
                                    <th scope="col">Fair Market Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Producing</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Edit | Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($cars))
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($cars as $car)
                                        @php
                                            $images = json_decode($car->images);
                                        @endphp
                                        <tr>
                                            <td style="padding: 12px 5px" scope="row">
                                                {{ ($cars->currentPage() - 1) * $cars->perPage() + $loop->iteration }}</td>
                                            <td>{{ $car->name }}</td>
                                            <td style="width:80px">{{ $car->brand->name }}</td>
                                            <td>{{ $car->category->name }}</td>
                                            <td>${{ number_format($car->msrp, 0, ',', '.') }}</td>
                                            <td>${{ number_format($car->fair_market_price, 0, ',', '.') }}</td>
                                            <td>{{ $car->quantity }}</td>
                                            <td>{{ $car->producing_year }}</td>
                                            <td style="width: 210px;">
                                                <img src="{{ asset('images/cars/' . $car->avatar) }}" alt="">
                                                @if ($images)
                                                    @foreach ($images as $image)
                                                        <img class="mb-1" src="{{ asset('images/cars/' . $image) }}"
                                                            alt="" style="border-radius: 3px;">
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning mb-1"
                                                    style="width: 70px;">Edit</a>
                                                <a href="#" class="btn btn-danger mb-1" style="width: 70px;"
                                                    data-toggle="modal" data-target="#deleteConfirmationModal"
                                                    data-id="{{ $car->id }}" data-name="{{ $car->name }}"
                                                    data-delete-route="cars/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $cars->links() }}
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
                                Are you sure you want to delete the car "<span id="entityName"></span>"?
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
