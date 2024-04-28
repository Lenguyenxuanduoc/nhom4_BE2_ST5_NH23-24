@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Edit Car</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Car', 'key' => 'Edit'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">

                        {{-- Thông báo lỗi khi sửa không thành công --}}
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Thông báo thành công khi sửa thành công --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter car name"
                                    value="{{ $car->name }}" required>
                            </div>

                            <div class="form-group">
                                <label>Brand</label>
                                <select class="form-control" name="brand_id">
                                    @if (!empty($brands))
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ $car->brand_id == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    @if (!empty($categories))
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $car->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-4">
                                    <label>Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Enter price"
                                        value="{{ $car->price }}" required>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control" name="quantity" placeholder="Enter quantity"
                                        value="{{ $car->quantity }}">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label>Producing Year</label>
                                    <input type="number" class="form-control" name="producing_year" id="producingYear"
                                        placeholder="Enter producing year" value="{{ $car->producing_year }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" style="height: 120px" name="description" placeholder="Enter description"
                                    id="description">{{ $car->description }}</textarea>
                            </div>

                            <div class="form-row mb-3">
                                @php
                                    $images = json_decode($car->images);
                                @endphp
                                @for ($i = 0; $i <= 4; $i++)
                                <div class="col-md-2 col-img">
                                    <label for="">Image {{ $i+1 }}</label>
                                    <div class="avatar-upload">
                                        <div>
                                            <input type="file" name="img{{ $i+1 }}" id="input-file-img{{ $i+1 }}"
                                                accept="image/png, image/jpg, image/jpeg" onchange="previewImage(this, 'profile-img{{ $i+1 }}')">
                                        </div>
                                        <img src="{{ asset('images/cars/'.$images[$i]) }}" alt="" id="profile-img{{ $i+1 }}">
                                    </div>
                                </div>
                                @endfor
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Avatar</label>
                                <div class="avatar-upload">
                                    <div>
                                        <input type="file" name="avatar" id="input-file"
                                            accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                    <img src="{{ asset('images/cars/'.$car->avatar) }}" alt="" id="profile-avatar">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning mb-5">Edit</button>
                            <a type="submit" href="{{route('cars.index')}}" class="btn btn-danger mb-5">Cancel</a>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
