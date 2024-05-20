@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Add Safety</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Safety', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('safeties.store') }}" enctype="multipart/form-data">
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
                                <label>IIHS Best Pick</label>
                                <input type="text" class="form-control" name="IIHS_best_pick" placeholder="Enter IIHS Best Pick">
                            </div>

                            <div class="form-group">
                                <label>IIHS Front Small Overlap</label>
                                <input type="text" class="form-control" name="IIHS_front_small_overlap" placeholder="Enter IIHS Front Small Overlap">
                            </div>

                            <div class="form-group">
                                <label>IIHS Rear Crash</label>
                                <input type="text" class="form-control" name="IIHS_rear_crash" placeholder="Enter IIHS Rear Crash">
                            </div>

                            <div class="form-group">
                                <label>IIHS Rating Front Driver</label>
                                <input type="text" class="form-control" name="IIHS_rating_front_driver" placeholder="Enter IIHS Rating Front Driver">
                            </div>

                            <div class="form-group">
                                <label>IIHS Rating Front Side</label>
                                <input type="text" class="form-control" name="IIHS_rating_front_side" placeholder="Enter IIHS Rating Front Side">
                            </div>

                            <div class="form-group">
                                <label>IIHS Rating Rear Side</label>
                                <input type="text" class="form-control" name="IIHS_rating_rear_side" placeholder="Enter IIHS Rating Rear Side">
                            </div>

                            <div class="form-group">
                                <label>IIHS Front Moderate Overlap</label>
                                <input type="text" class="form-control" name="IIHS_front_moderate_overlap" placeholder="Enter IIHS Front Moderate Overlap">
                            </div>

                            <div class="form-group">
                                <label>IIHS Overall Side Crash</label>
                                <input type="text" class="form-control" name="IIHS_overall_side_crash" placeholder="Enter IIHS Overall Side Crash">
                            </div>

                            <div class="form-group">
                                <label>IIHS Roof Strength</label>
                                <input type="text" class="form-control" name="IIHS_roof_strength" placeholder="Enter IIHS Roof Strength">
                            </div>

                            <div class="form-group">
                                <label>NHTSA Rating Front Passenger</label>
                                <input type="text" class="form-control" name="NHTSA_rating_front_passenger" placeholder="Enter NHTSA Rating Front Passenger">
                            </div>

                            <div class="form-group">
                                <label>NHTSA Rating Overall</label>
                                <input type="text" class="form-control" name="NHTSA_rating_overall" placeholder="Enter NHTSA Rating Overall">
                            </div>

                            <div class="form-group">
                                <label>NHTSA Rating Rollover</label>
                                <input type="text" class="form-control" name="NHTSA_rating_rollover" placeholder="Enter NHTSA Rating Rollover">
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a type="submit" href="{{ route('safeties.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
