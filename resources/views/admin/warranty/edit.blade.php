@extends('admin.layouts.admin')

@section('title')
    <title>Admin | Edit Warranty</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content_header', ['name' => 'Warranty', 'key' => 'Edit'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form method="post" action="{{ route('warranties.update', $warranty->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Car</label>
                                <select class="form-control" name="car_id" id="car_id" required>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}" {{ $car->id == $warranty->car_id ? 'selected' : '' }}>
                                            {{ $car->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Free Maintenance Miles</label>
                                <input type="text" class="form-control" name="free_maintenance_miles" value="{{ $warranty->free_maintenance_miles }}" placeholder="Enter free maintenance miles" required>
                            </div>

                            <div class="form-group">
                                <label>Full Warranty Miles</label>
                                <input type="text" class="form-control" name="full_warranty_miles" value="{{ $warranty->full_warranty_miles }}" placeholder="Enter full warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Powertrain Warranty Miles</label>
                                <input type="text" class="form-control" name="powertrain_warranty_miles" value="{{ $warranty->powertrain_warranty_miles }}" placeholder="Enter powertrain warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Roadside Warranty Miles</label>
                                <input type="text" class="form-control" name="roadside_warranty_miles" value="{{ $warranty->roadside_warranty_miles }}" placeholder="Enter roadside warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Corrosion Warranty Miles</label>
                                <input type="text" class="form-control" name="corrosion_warranty_miles" value="{{ $warranty->corrosion_warranty_miles }}" placeholder="Enter corrosion warranty miles" required>
                            </div>

                            <div class="form-group">
                                <label>Free Maintenance Months</label>
                                <input type="text" class="form-control" name="free_maintenance_months" value="{{ $warranty->free_maintenance_months }}" placeholder="Enter free maintenance months" required>
                            </div>

                            <div class="form-group">
                                <label>Full Warranty Months</label>
                                <input type="text" class="form-control" name="full_warranty_months" value="{{ $warranty->full_warranty_months }}" placeholder="Enter full warranty months" required>
                            </div>

                            <div class="form-group">
                                <label>Powertrain Warranty Months</label>
                                <input type="text" class="form-control" name="powertrain_warranty_months" value="{{ $warranty->powertrain_warranty_months }}" placeholder="Enter powertrain warranty months" required>
                            </div>

                            <div class="form-group">
                                <label>Roadside Warranty Months</label>
                                <input type="text" class="form-control" name="roadside_warranty_months" value="{{ $warranty->roadside_warranty_months }}" placeholder="Enter roadside warranty months" required>
                            </div>

                            <div class="form-group">
                                <label>Corrosion Warranty Months</label>
                                <input type="text" class="form-control" name="corrosion_warranty_months" value="{{ $warranty->corrosion_warranty_months }}" placeholder="Enter corrosion warranty months" required>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Update</button>
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
