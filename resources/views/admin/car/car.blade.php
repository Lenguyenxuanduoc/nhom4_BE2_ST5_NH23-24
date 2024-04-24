<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.partials.navbar')

        @include('admin.partials.main_sidebar')
        
        <!-- Content Wrapper. Contains page content -->
        <!-- <div class="content-wrapper">
            <h1>Page Car</h1>
        </div> -->

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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cars Overview</h3>
                        <div class="card-tools">
                            <a href="create-car" class="btn btn-primary">Create new Car</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Repeat this block for each car -->
                        <div class="row car-item mb-4">
                            <div class="col-md-1">
                                <img src="car-image.jpg" alt="Car Image" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h5 class="mt-2">BMW 4-Series</h5>
                                <p>Nhà sản xuất: BMW</p>
                                <p>Thể loại: Sedan</p>
                                <p>Giá tiền: $50,000</p>
                                <p>Số lượng: 10</p>
                                <p>Năm sản xuất: 2022</p>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <a href="edit-car" class="btn btn-warning mr-2">Edit Car</a>
                                    <button type="button" class="btn btn-danger" onclick="deleteCar()">Delete</button>
                                </div>
                            </div>
                        </div><!-- End Car Block -->

                        <!-- Repeat this block for each car -->
                        <div class="row car-item mb-4">
                            <div class="col-md-1">
                                <img src="images/cars/ford/mustang1.jpg" alt="Car Image" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h5 class="mt-2">BMW 4-Series</h5>
                                <p>Nhà sản xuất: BMW</p>
                                <p>Thể loại: Sedan</p>
                                <p>Giá tiền: $50,000</p>
                                <p>Số lượng: 10</p>
                                <p>Năm sản xuất: 2022</p>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <a href="edit-car" class="btn btn-warning mr-2">Edit Car</a>
                                    <button type="button" class="btn btn-danger" onclick="deleteCar()">Delete</button>
                                </div>
                            </div>
                        </div><!-- End Car Block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    </div>
</div>
        @include('admin.partials.footer')
        
    </div>

    <!-- jQuery -->
    <script src="/public/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/public/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/public/adminlte/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/public/adminlte/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/public/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/public/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/public/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/public/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/public/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/public/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/public/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/public/adminlte/dist/js//public/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="/public/adminlte/dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/public/adminlte/dist/js/pages/dashboard.js"></script>
    <script>
    function deleteCar() {
        alert('Bạn có chắc muốn xóa?');
    }
</script>
</body>

</html>