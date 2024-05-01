@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Add Weight Capacity</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Weight Capacity', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('weightcapacities.store') }}" enctype="multipart/form-data">
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
                                <label>Fuel Capacity</label>
                                <input type="text" class="form-control" name="fuel_capacity" placeholder="Enter fuel capacity" required>
                            </div>

                            <div class="form-group">
                                <label>Cargo Capacity</label>
                                <input type="text" class="form-control" name="cargo_capacity" placeholder="Enter cargo capacity" required>
                            </div>

                            <div class="form-group">
                                <label>Curb Weight</label>
                                <input type="text" class="form-control" name="curb_weight" placeholder="Enter curb weight" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a type="submit" href="{{ route('weightcapacities.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
