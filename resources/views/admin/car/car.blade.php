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
        <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <a href="add" class="btn btn-primary">Add New Car</a>
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
                    <th>Publishing year</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Toyota Camry</td>
                    <td>Toyota</td>
                    <td>Sedan</td>
                    <td>$25,000</td>
                    <td>2022</td>
                    <td></td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit" class="btn btn-info">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Honda Civic</td>
                    <td>Honda</td>
                    <td>Sedan</td>
                    <td>$22,000</td>
                    <td>2021</td>
                    <td></td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit" class="btn btn-info">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Ford Mustang</td>
                    <td>Ford</td>
                    <td>Coupe</td>
                    <td>$35,000</td>
                    <td>2023</td>
                    <td></td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                        <a href="edit" class="btn btn-info">Edit</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              
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