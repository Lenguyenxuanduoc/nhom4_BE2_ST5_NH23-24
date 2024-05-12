@extends('admin.layouts.admin')
@section('title')
    <title>Admin | Add Interior</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Interior', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('interiors.store') }}" enctype="multipart/form-data">
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
                                <label>Front Headroom</label>
                                <input type="text" class="form-control" name="front_headroom" placeholder="Enter front headroom"
                                    id="front_headroom" required>
                            </div>

                            <div class="form-group">
                                <label>Rear Headroom</label>
                                <input type="text" class="form-control" name="rear_headroom" placeholder="Enter rear headroom"
                                    id="rear_headroom" required>
                            </div>

                            <div class="form-group">
                                <label>Front Legroom</label>
                                <input type="text" class="form-control" name="front_legroom" placeholder="Enter front legroom"
                                    id="front_legroom" required>
                            </div>

                            <div class="form-group">
                                <label>Rear Legroom</label>
                                <input type="text" class="form-control" name="rear_legroom" placeholder="Enter rear legroom"
                                    id="rear_legroom" required>
                            </div>

                            <div class="form-group">
                                <label>Front Shoulder Room</label>
                                <input type="text" class="form-control" name="front_shoulder_room" placeholder="Enter front shoulder room"
                                    id="front_shoulder_room" required>
                            </div>

                            <div class="form-group">
                                <label>Rear Shoulder Room</label>
                                <input type="text" class="form-control" name="rear_shoulder_room" placeholder="Enter rear shoulder room"
                                    id="rear_shoulder_room" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a type="submit" href="{{ route('interiors.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
