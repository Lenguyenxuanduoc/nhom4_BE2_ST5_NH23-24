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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh Sửa Thông Tin Ô Tô</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông Tin Ô Tô</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <!-- Tên Ô Tô -->
                                <div class="form-group">
                                    <label for="carName">Tên ô tô:</label>
                                    <input type="text" class="form-control" id="carName" placeholder="Nhập tên ô tô">
                                </div>

                                <!-- Nhà Sản Xuất -->
                                <div class="form-group">
                                    <label for="manufacturer">Nhà sản xuất:</label>
                                    <input type="text" class="form-control" id="manufacturer" placeholder="Nhập tên nhà sản xuất">
                                </div>

                                <!-- Ngày Ra Mắt -->
                                <div class="form-group">
                                    <label for="releaseDate">Ngày ra mắt:</label>
                                    <input type="date" class="form-control" id="releaseDate">
                                </div>

                                <!-- Giá Bán -->
                                <div class="form-group">
                                    <label for="price">Giá bán:</label>
                                    <input type="text" class="form-control" id="price" placeholder="Nhập giá bán">
                                </div>

                                <!-- Chỉnh Sửa Hình Ảnh -->
                                <div class="form-group">
                                    <label for="carImage">Chỉnh sửa hình ảnh:</label>
                                    <input type="file" class="form-control-file" id="carImage">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</body>

</html>