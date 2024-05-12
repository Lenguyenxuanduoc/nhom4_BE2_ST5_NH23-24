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
                        <a href="{{ route('cars.add') }}" class="btn btn-dark my-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-car" style="background: white">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
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
                                            <th scope="row">
                                                {{ ($cars->currentPage() - 1) * $cars->perPage() + $loop->iteration }}</th>
                                            <td>{{ $car->name }}</td>
                                            <td>{{ $car->brand->name }}</td>
                                            <td>{{ $car->category->name }}</td>
                                            <td>${{ number_format($car->price, 0, ',', '.') }}</td>
                                            <td style="max-width: 150px">{{ \Str::limit($car->description, 100) }}</td>
                                            <td>{{ $car->quantity }}</td>
                                            <td>{{ $car->producing_year }}</td>
                                            <td style="max-width: 210px">
                                                <img src="{{ asset('images/cars/' . $car->avatar) }}" alt="">
                                                @foreach ($images as $image)
                                                    <img class="mb-1" src="{{ asset('images/cars/' . $image) }}"
                                                        alt="">
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('cars.edit', $car->id) }}"
                                                    class="btn btn-warning mb-1" style="width: 70px;">Edit</a>
                                                <a href="{{ route('cars.delete', $car->id) }}"
                                                    class="btn btn-danger mb-1" style="width: 70px;" >Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $cars->links() }}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
