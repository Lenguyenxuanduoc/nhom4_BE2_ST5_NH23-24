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

                        <form method="post" action="{{ route('cars.update', $car->id) }}" class="needs-validation">
                            @csrf
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter car name"
                                    value="{{ $car->name }}" required>
                            </div>

                            <div class="form-group">
                                <label>Manufacturer</label>
                                <select class="form-control" name="manufacturer_id">
                                    @if (!empty($manufacturers))
                                        @foreach ($manufacturers as $manufacturer)
                                            <option value="{{ $manufacturer->id }}"
                                                {{ $car->manufacturer_id == $manufacturer->id ? 'selected' : '' }}>
                                                {{ $manufacturer->name }}
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

                            {{--<label class="mt-3">Images</label>
                             <div class="form-row">
                                @php
                                    $images = json_decode($car->images);
                                    $imageIds = [
                                        'imageInput1',
                                        'imageInput2',
                                        'imageInput3',
                                        'imageInput4',
                                        'imageInput5',
                                    ];
                                    $previewIds = [
                                        'imagePreview1',
                                        'imagePreview2',
                                        'imagePreview3',
                                        'imagePreview4',
                                        'imagePreview5',
                                    ];
                                @endphp
                                @for ($i = 0; $i < count($imageIds); $i++)
                                    <div class="col-md-2 mb-4 mr-4">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" id="{{ $imageIds[$i] }}"
                                                name="images[]" multiple accept="image/*" placeholder="Choose 5 images"
                                                required onchange="previewImages(this, '{{ $previewIds[$i] }}')">
                                        </div>
                                        <div id="{{ $previewIds[$i] }}" class="mb-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="{{ asset('images/cars/' . $images[$i]) }}" alt=""
                                                        style="max-width: 170px; height: 100px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div> --}}

                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control-file" id="imageInput" name="images[]" multiple
                                    accept="image/*" required>
                                <small>Choose 5 images</small>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-4">
                                    <div id="imagePreview" class="mb-3">
                                        @php
                                            $images = json_decode($car->images);
                                        @endphp
                                        @foreach ($images as $image)
                                            <img src="{{ asset('images/cars/' . $image) }}" alt=""
                                                style="max-width: 170px; height: 100px;">
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <label>Avatar</label>
                            <input type="file" class="form-control-file" id="avatarInput" name="avatar" multiple
                                accept="image/*" placeholder="Choose avatar" value="{{ $car->avatar }}" required
                                onchange="previewAvatar(this, 'preview')">
                            <small>Choose avatar</small>

                            <div class="form-row">
                                <div id="preview" class="mb-3">
                                    <img src="{{ asset('images/cars/' . $car->avatar) }}" alt=""
                                        style="max-width: 170px; height: 100px;" alt="">
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
