@include('admin.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.partials.navbar')

        @include('admin.partials.main_sidebar')

        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Car List</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->

                <section class="content">
                    <div class="container">
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="add_car" class="btn btn-primary">Add New Car</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="showAlert"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name Car</th>
                                                <th>Manufacturer</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>description</th>
                                                <th>quantity</th>
                                                <th>Publishing year</th>
                                                <th>Image</th>
                                                <th>Avatar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $car)
                                            <tr> 
                                                <td>{{$car->id}}</td>
                                                <td>{{$car->name}}</td>
                                                <td>{{$car->manufacturer_id}}</td>
                                                <td>{{$car->category_id}}</td>
                                                <td>{{$car->price}}</td>
                                                <td>{{$car->description}}</td>
                                                <td>{{$car->quantity}}</td>
                                                <td>{{$car->producing_year}}</td>
                                                <td>{{$car->images}}</td>
                                                <!-- <td>{{$car->avatar}}</td> -->
                                                <td>
                                                    <img src="{{url('public/images/cars')}}/{{$car->avatar}}" widt="60">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">Delete</button>
                                                    <a href="edit_car/1" class="btn btn-info">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ asset('adminlte/plugins/chart.js/Chart.min.js') }}></script>
    <!-- Sparkline -->
    <script src={{ asset('adminlte/plugins/sparklines/sparkline.js') }}></script>
    <!-- JQVMap -->
    <script src={{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
    <!-- jQuery Knob Chart -->
    <script src={{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}></script>
    <!-- daterangepicker -->
    <script src={{ asset('adminlte/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
    <!-- Summernote -->
    <script src={{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}></script>
    <!-- overlayScrollbars -->
    <script src={{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('adminlte/dist/js/adminlte.js') }}></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="/public/adminlte/dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ asset('adminlte/dist/js/pages/dashboard.js') }}></script>

    <script>
        function deleteCar() {
            alert('Are you sure to delete?');
        }
    </script>
</body>

</html>
