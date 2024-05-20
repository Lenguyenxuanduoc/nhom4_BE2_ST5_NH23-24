@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Add Warranty</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Warranty', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('warranties.store') }}" enctype="multipart/form-data">
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
                                <label>Free Maintenance Miles</label>
                                <input type="text" class="form-control" name="free_maintenance_miles" placeholder="Enter free maintenance miles" required>
                            </div>

                            <div class="form-group">
                                <label>Full Warranty Miles</label>
                                <input type="text" class="form-control" name="full_warranty_miles" placeholder="Enter full warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Powertrain Warranty Miles</label>
                                <input type="text" class="form-control" name="powertrain_warranty_miles" placeholder="Enter powertrain warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Roadside Warranty Miles</label>
                                <input type="text" class="form-control" name="roadside_warranty_miles" placeholder="Enter roadside warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Corrosion Warranty Miles</label>
                                <input type="text" class="form-control" name="corrosion_warranty_miles" placeholder="Enter corrosion warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Free Maintenance Months</label>
                                <input type="text" class="form-control" name="free_maintenance_months" placeholder="Enter free maintenance months" required>
                            </div>

                            <div class="form-group">
                                <label>Full Warranty Months</label>
                                <input type="text" class="form-control" name="full_warranty_months" placeholder="Enter full warranty months" required>
                            </div>

                            <div class="form-group">
                                <label>Powertrain Warranty Months</label>
                                <input type="text" class="form-control" name="powertrain_warranty_months" placeholder="Enter powertrain warranty months" required>
                            </div>

                            <div class="form-group">
                                <label>Roadside Warranty Months</label>
                                <input type="text" class="form-control" name="roadside_warranty_months" placeholder="Enter roadside warranty months" required>
                            </div>

                            <div class="form-group">
                                <label>Corrosion Warranty Months</label>
                                <input type="text" class="form-control" name="corrosion_warranty_months" placeholder="Enter corrosion warranty months" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Add</button>
                            <a href="{{ route('warranties.index') }}" class="btn btn-danger mb-5 ml-2">Cancel</a>
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
