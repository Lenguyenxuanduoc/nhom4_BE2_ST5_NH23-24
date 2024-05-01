@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Edit Performance</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Performance', 'key' => 'Edit'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('performances.update', $performance->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label>Car</label>
                                <select class="form-control" name="car_id" id="car_id" required>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}" {{ $car->id == $performance->car_id ? 'selected' : '' }}>{{ $car->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Engine</label>
                                <input type="text" class="form-control" name="engine" value="{{ $performance->engine }}" required>
                            </div>

                            <div class="form-group">
                                <label>Horsepower</label>
                                <input type="text" class="form-control" name="horsepower" value="{{ $performance->horsepower }}" required>
                            </div>

                            <div class="form-group">
                                <label>Trim</label>
                                <input type="text" class="form-control" name="trim" value="{{ $performance->trim }}" required>
                            </div>

                            <div class="form-group">
                                <label>Torque</label>
                                <input type="text" class="form-control" name="torque" value="{{ $performance->torque }}" required>
                            </div>

                            <div class="form-group">
                                <label>Cylinders</label>
                                <input type="number" class="form-control" name="cylinders" value="{{ $performance->cylinders }}" required>
                            </div>

                            <div class="form-group">
                                <label>Standard MPG</label>
                                <input type="text" class="form-control" name="standard_mpg" value="{{ $performance->standard_mpg }}" required>
                            </div>

                            <div class="form-group">
                                <label>Transmission</label>
                                <input type="text" class="form-control" name="transmission" value="{{ $performance->transmission }}" required>
                            </div>

                            <div class="form-group">
                                <label>Transmission Type</label>
                                <input type="text" class="form-control" name="transmission_type" value="{{ $performance->transmission_type }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Edit</button>
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
