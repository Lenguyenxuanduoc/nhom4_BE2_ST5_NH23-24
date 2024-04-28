@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Add Brand</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Brand', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter brand name"
                                    id="name" required>
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

                            <div class="form-group mb-3">
                                <label for="">Avatar</label>
                                <div class="avatar-upload">
                                    <div>
                                        <input type="file" name="avatar" id="input-file"
                                            accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                    <img src="{{ asset('images/') }}" alt="" id="profile-avatar">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a type="submit" href="{{ route('cars.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
