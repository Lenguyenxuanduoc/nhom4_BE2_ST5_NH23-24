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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit</h1>
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
                        <h3 class="card-title">Edit</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <!-- Tên Ô Tô -->
                            <div class="form-group">
                                <label for="namecar">Name Car:</label>
                                <input type="text" class="form-control" id="namecar" placeholder="Name Car">
                            </div>

                            <!-- Nhà Sản Xuất -->
                            <div class="form-group">
                                <label for="manufacturer">Manufacturer</label>
                                <select class="form-control" id="manufacturer">
                                    <option value="Toyota">Toyota</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Ford">Ford</option>
                                    <!-- Thêm các tùy chọn khác tại đây -->
                                </select>
                            </div>

                            <!-- Loại Xe -->
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category">
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Truck">Truck</option>
                                    <!-- Thêm các tùy chọn khác tại đây -->
                                </select>
                            </div>

                            <!-- Giá Bán -->
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" placeholder="Price">
                            </div>

                            <!-- Năm Ra Mắt -->
                            <div class="form-group">
                                <label for="releaseYear">Năm ra mắt:</label>
                                <select class="form-control" id="releaseYear">
                                    <!-- Thêm các tùy chọn năm từ năm 1800 đến năm hiện tại -->
                                    <?php
                                    $currentYear = date("Y");
                                    for ($year = 1800; $year <= $currentYear; $year++) {
                                        echo "<option value=\"$year\">$year</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Tải Lên Hình Ảnh -->
                            <div class="form-group">
                                <label for="carImages">Upload images:</label>
                                <input type="file" class="form-control-file" id="carImages" multiple>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
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
</body>

</html>