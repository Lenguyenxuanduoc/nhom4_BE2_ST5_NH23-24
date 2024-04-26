@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Add Car</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add New Car</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Car List Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" class="form-control" name="car_name" placeholder="Enter car name" id="carName">
                            </div>

                            <div class="form-group">
                                <label>Manufacturer</label>
                                <select class="form-control" name="manufacturer">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-4"> 
                                    <label>Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter price">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label>Producing Year</label>
                                    <input type="text" class="form-control" name="producing_year" id="producingYear"
                                        placeholder="Enter producing year">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" id="imageInput" name="images[]" multiple
                                    accept="image/*" placeholder="Choose 6 images">
                                <small>Choose 5 images</small>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-4"> 
                                    <div id="imagePreview" class="mb-3"></div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" class="form-control" id="avatarInput" name="images[]" multiple
                                    accept="image/*" placeholder="Choose avatar">
                                <small>Choose avatar</small>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-4"> 
                                    <div id="avatarPreview" class="mb-3"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
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
