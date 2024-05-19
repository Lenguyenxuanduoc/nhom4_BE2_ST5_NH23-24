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
                                <div class="col-md-6 mb-4">
                                    <label>Founded Year</label>
                                    <input type="number" class="form-control" name="founded_year"
                                        placeholder="Enter founded year" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Founder Name</label>
                                    <input type="text" class="form-control" name="founder_name"
                                        placeholder="Enter founder name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter description" id="description"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Logo</label>
                                <div class="avatar-upload">
                                    <div>
                                        <input type="file" name="logo" id="input-file-brand-logo" accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                    <img src="{{ asset('images/') }}" alt="" id="profile-brand-logo">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Banner</label>
                                <div class="avatar-upload">
                                    <div>
                                        <input type="file" name="banner" id="input-file-brand-banner" accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                    <img src="{{ asset('images/') }}" alt="" id="profile-brand-banner">
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
