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
        <!-- Content Header (Page header) -->
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Featured Manufacturers</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <a href="create-manufacturers" class="btn btn-primary">Tạo Nhà Sản Xuất Mới</a>
        <div class="row">
            <!-- Manufacturer 1 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manufacturer A</h5>
                        <!-- Thêm hình ảnh -->
                        <img src="manufacturer-a-image.jpg" alt="Manufacturer A Image" class="img-fluid mb-2">
                        <p class="card-text">Năm thành lập: 1990</p>
                        <p class="card-text">Tên người sáng lập: John Doe</p>
                        <p class="card-text">Miêu tả: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at justo eget velit fringilla imperdiet.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-danger">Xóa</button>
                        <a href="edit-manufacturer-a" class="btn btn-primary">Chỉnh Sửa</a>
                    </div>
                </div>
            </div>
            <!-- End Manufacturer 1 -->

            <!-- Manufacturer 2 -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manufacturer B</h5>
                        <!-- Thêm hình ảnh -->
                        <img src="manufacturer-b-image.jpg" alt="Manufacturer B Image" class="img-fluid mb-2">
                        <p class="card-text">Năm thành lập: 1985</p>
                        <p class="card-text">Tên người sáng lập: Jane Smith</p>
                        <p class="card-text">Miêu tả: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at justo eget velit fringilla imperdiet.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-danger">Xóa</button>
                        <a href="edit-manufacturer-b" class="btn btn-primary">Chỉnh Sửa</a>
                    </div>
                </div>
            </div>
            <!-- End Manufacturer 2 -->
        </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

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