@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Add Car</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Car', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('cars.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter car name"
                                    id="name" required>
                            </div>

                            <div class="form-group">
                                <label>Manufacturer</label>
                                <select class="form-control" name="manufacturer_id">
                                    @if (!empty($manufacturers))
                                        @foreach ($manufacturers as $manufacturer)
                                            <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    @if (!empty($categories))
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-4">
                                    <label>Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Enter price"
                                        required>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label>Producing Year</label>
                                    <input type="number" class="form-control" name="producing_year" id="producingYear"
                                        placeholder="Enter producing year" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter description" id="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" id="imageInput" name="images[]" multiple
                                    accept="image/*" placeholder="Choose 6 images" required>
                                <small>Choose 5 images</small>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-4">
                                    <div id="imagePreview" class="mb-3"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" class="form-control" id="avatarInput" name="avatar" multiple
                                    accept="image/*" placeholder="Choose avatar" required>
                                <small>Choose avatar</small>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-4">
                                    <div id="avatarPreview" class="mb-3"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
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
