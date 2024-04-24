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
        <!-- Content Header (Page header) -->
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Reviews</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <div class="btn btn-primary"><i class="fas fa-search"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="mailbox-controls">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                </div>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">1-50/200
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                    <tbody>
                        <!-- Data Rows -->
                        <tbody>
    <tr>
        <td>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
        </td>
        <td class="mailbox-name">Alexander Pierce</td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...</td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">5 mins ago</td>
    </tr>
    <tr>
        <td>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check2">
                <label for="check2"></label>
            </div>
        </td>
        <td class="mailbox-name">Alexander Pierce</td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...</td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">28 mins ago</td>
    </tr>
    <!-- Thêm dữ liệu mẫu ở đây -->
</tbody>

                    </tbody>
                </table>
            </div>
        </div>
     
    </div>
</div>

</div>
<!-- /.content-wrapper -->

</div>
        @include('admin.partials.footer')
        
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