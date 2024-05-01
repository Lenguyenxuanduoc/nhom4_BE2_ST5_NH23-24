@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Add Performance</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Performance', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('performances.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Car</label>
                                <select class="form-control" name="car_id" id="car_id" required>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Engine</label>
                                <input type="text" class="form-control" name="engine" placeholder="Enter engine" required>
                            </div>

                            <div class="form-group">
                                <label>Horsepower</label>
                                <input type="text" class="form-control" name="horsepower" placeholder="Enter horsepower" required>
                            </div>

                            <div class="form-group">
                                <label>Trim</label>
                                <input type="text" class="form-control" name="trim" placeholder="Enter trim" required>
                            </div>

                            <div class="form-group">
                                <label>Torque</label>
                                <input type="text" class="form-control" name="torque" placeholder="Enter torque" required>
                            </div>

                            <div class="form-group">
                                <label>Cylinders</label>
                                <input type="number" class="form-control" name="cylinders" placeholder="Enter cylinders" required>
                            </div>

                            <div class="form-group">
                                <label>Standard MPG</label>
                                <input type="text" class="form-control" name="standard_mpg" placeholder="Enter standard MPG" required>
                            </div>

                            <div class="form-group">
                                <label>Transmission</label>
                                <input type="text" class="form-control" name="transmission" placeholder="Enter transmission" required>
                            </div>

                            <div class="form-group">
                                <label>Transmission Type</label>
                                <input type="text" class="form-control" name="transmission_type" placeholder="Enter transmission type" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a type="submit" href="{{ route('performances.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
