@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Edit Exterior</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Exterior', 'key' => 'Edit'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('exteriors.update', $exterior->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Car</label>
                                <select class="form-control" name="car_id" id="car_id" required>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}" {{ $car->id == $exterior->car_id ? 'selected' : '' }}>
                                            {{ $car->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Length</label>
                                <input type="text" class="form-control" name="length" placeholder="Enter length"
                                    value="{{ $exterior->length }}" id="length" required>
                            </div>

                            <div class="form-group">
                                <label>Width</label>
                                <input type="text" class="form-control" name="width" placeholder="Enter width"
                                    value="{{ $exterior->width }}" id="width" required>
                            </div>

                            <div class="form-group">
                                <label>Height</label>
                                <input type="text" class="form-control" name="height" placeholder="Enter height"
                                    value="{{ $exterior->height }}" id="height" required>
                            </div>

                            <div class="form-group">
                                <label>Wheelbase</label>
                                <input type="text" class="form-control" name="wheelbase" placeholder="Enter wheelbase"
                                    value="{{ $exterior->wheelbase }}" id="wheelbase" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Edit</button>
                            <a type="submit" href="{{ route('exteriors.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
