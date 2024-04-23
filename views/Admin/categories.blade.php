<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.navbar')

        @include('admin.main_sidebar')
        
        <!-- Content Wrapper. Contains page content -->
        <!-- <div class="content-wrapper">
            <h1>Page Car</h1>
        </div> -->

        <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
    <!-- Main content -->
    <section class="content">
        <!-- Category box row -->
        <div class="col-sm-6">
                        <h1>Categoris List</h1>
         </div>
        <a href="create-categories" class="btn btn-primary">Create</a>
        <div class="row">
            <!-- Passenger Cars -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Passenger Cars</h3>
                    </div>
                    <div class="box-body">
                        Designed for passenger transport in urban or highway settings.
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit-categories" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>

            <!-- Sports Cars -->
            <div class="col-md-6">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sports Cars</h3>
                    </div>
                    <div class="box-body">
                        High performance and sport design, often used for recreation and racing.
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit-categories" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second row for other categories -->
        <div class="row">
            <!-- SUVs -->
            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">SUVs</h3>
                    </div>
                    <div class="box-body">
                        Capable of carrying multiple passengers and cargo, suitable for all terrains.
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit-categories" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>

            <!-- Pickup Trucks -->
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pickup Trucks</h3>
                    </div>
                    <div class="box-body">
                        Large space in the back for cargo or transport work.
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit-categories" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ambulances -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ambulances</h3>
                    </div>
                    <div class="box-body">
                        Specially designed for rescue operations and transporting injured persons.
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit-categories" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
<!-- /.content-wrapper -->

    </div>
</div>
        @include('admin.footer')
        
    </div>

    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="adminlte/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="adminlte/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="adminlte/plugins/moment/moment.min.js"></script>
    <script src="adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="adminlte/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="adminlte/dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="adminlte/dist/js/pages/dashboard.js"></script>
    <script>
    function deleteCar() {
        alert('Bạn có chắc muốn xóa?');
    }
</script>
</body>

</html>