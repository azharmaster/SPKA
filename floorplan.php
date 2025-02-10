<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'inc/meta.php'; ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="file/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="file/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="file/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="file/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="file/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="file/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="file/dist/css/adminlte.min.css">
</head>

<body class="hold-transition   layout-fixed   text-sm ">
  <div class="wrapper">



    <!-- /header -->
    <?php
    include 'inc/header.php';
    include 'inc/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="page-title">Pelan Lantai</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="?i=DB">Home</a></li>
                <li class="breadcrumb-item active">Pelan Lantai</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Senarai Pelan Lanta</h3>

                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-4">
                      <div class="row">

                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box ">
                            <div class="inner">
                              <h3 class="text-center">FIRE ALARMS</h3>
                            </div>
                          </div>
                        </div>

                        <!-- Device -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>3</h3>
                              <p>Device</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-thermometer"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- Sensor -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>53</h3>
                              <p>Sensor</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-thermometer-half"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- Detector -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>44</h3>
                              <p>Detector</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-seedling"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- People -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <h3>65</h3>
                              <p>People</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-user-tie"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- Temperature -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-primary">
                            <div class="inner">
                              <h3>22°C</h3>
                              <p>Temperature</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-temperature-high"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- Humidity -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-secondary">
                            <div class="inner">
                              <h3>45%</h3>
                              <p>Humidity</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-tint"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- CO2 Level -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-teal">
                            <div class="inner">
                              <h3>400 ppm</h3>
                              <p>CO2 Level</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-chart-line"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->

                        <!-- Power Consumption -->
                        <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-maroon">
                            <div class="inner">
                              <h3>350 W</h3>
                              <p>Power Consumption</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-bolt"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="position-relative">
                        <img src="img/floor1.jpeg" class="img-fluid" width="700px">
                        <i class="fab fa-orcid position-absolute" style="top: 30px; left: 100px; color: red; font-size: 24px;"></i>
                        <i class="fab fa-orcid position-absolute" style="top: 30px; left: 400px; color: red; font-size: 24px;"></i>
                        <i class="fab fa-orcid position-absolute" style="top: 120px; left: 250px; color: red; font-size: 24px;"></i>
                      </div>
                      <div class="position-relative">
                        <img src="img/floor2.jpeg" class="img-fluid" width="700px">
                        <i class="fab fa-orcid position-absolute" style="top: 650px; left: 30px; color: red; font-size: 24px;"></i>
                        <i class="fab fa-orcid position-absolute" style="top: 650px; left: 150px; color: red; font-size: 24px;"></i>
                        <i class="fab fa-orcid position-absolute" style="top: 250px; left: 200px; color: red; font-size: 24px;"></i>
                      </div>
                      <div class="position-relative">
                        <img src="img/floor3.jpeg" class="img-fluid" width="700px">
                        <i class="fab fa-orcid position-absolute" style="top: 650px; left: 500px; color: red; font-size: 24px;"></i>
                        <i class="fab fa-orcid position-absolute" style="top: 280px; left: 230px; color: red; font-size: 24px;"></i>
                        <i class="fab fa-orcid position-absolute" style="top: 120px; left: 400px; color: red; font-size: 24px;"></i>
                      </div>
                    </div>

                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>



      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- /.content-wrapper footer -->
    <?php include 'inc/footer.php'; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="file/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="file/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="file/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="file/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="file/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="file/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="file/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="file/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="file/plugins/jszip/jszip.min.js"></script>
  <script src="file/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="file/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="file/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="file/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="file/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="file/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="file/dist/js/adminlte.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      // $("#example1").DataTable({
      //  "responsive": true, "lengthChange": true, "autoWidth": false,
      //   "buttons": [ 
      //                 {  
      //                     extend: 'excel',  
      //                     className: 'btn btn-default rounded excel',  
      //                     text: '<i class="far fa-file-excel"></i> Excel'  
      //                 },  
      //                 {  
      //                     extend: 'pdf',  
      //                     className: 'btn btn-default rounded pdf',  
      //                     text: '<i class="far fa-file-pdf"></i> Pdf'  
      //                 },   
      //                 {  
      //                     extend: 'print',  
      //                     className: 'btn btn-default rounded print',  
      //                     text: '<i class="fas fa-print"></i> Print'  
      //                 },
      //                 {  
      //                     extend: 'colvis',  
      //                     className: 'btn btn-default rounded pdf',  
      //                     text: '<i class="fas fa-sort"></i> Filter'  
      //                 }     ]

      // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>


</body>

</html>