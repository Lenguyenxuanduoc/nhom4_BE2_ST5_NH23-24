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
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create New Manufacturer</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- Manufacturer Creation Form -->
                <div class="card">
                    <div class="card-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="manufacturerName">Manufacturer Name</label>
                                <input type="text" class="form-control" id="manufacturerName" placeholder="Enter manufacturer name">
                            </div>
                            <div class="form-group">
                                <label for="manufacturerAddress">Manufacturer Address</label>
                                <input type="text" class="form-control" id="manufacturerAddress" placeholder="Enter manufacturer address">
                            </div>
                            <div class="form-group">
                                <label for="manufacturerPhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="manufacturerPhoneNumber" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="manufacturerEmailAddress">Email Address</label>
                                <input type="email" class="form-control" id="manufacturerEmailAddress" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <label for="manufacturerWarranty">Warranty Information</label>
                                <textarea class="form-control" id="manufacturerWarranty" placeholder="Enter warranty information"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="manufacturerServices">Services Information</label>
                                <textarea class="form-control" id="manufacturerServices" placeholder="Enter services information"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Manufacturer</button>
                        </form>
                    </div>
                </div>
                <!-- End Manufacturer Creation Form -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


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
</body>

</html>