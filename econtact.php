<?php
session_start();
include 'inc/config.php';

if (!isset($_SESSION['alogin'])) {
  header("Location: index.php");
  exit();
}
?>
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

<body class="hold-transition layout-fixed text-sm">
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
              <h1 class="page-title">Hubungi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="?i=DB">Home</a></li>
                <li class="breadcrumb-item active">Hubungi</li>
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
                  <h3 class="card-title">Senarai Hubungi</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body one">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead class="table table-secondary">
                      <tr class="text-left">
                        <th>#</th>
                        <th>Nama</th>
                        <th>No.Tel</th>
                        <th>T.Cipta </th>
                        <th>Tindakan</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query = mysqli_query($con, "SELECT * FROM `balai` ");
                      $cnt = 1;
                      while ($row = mysqli_fetch_array($query)) {

                      ?>
                        <tr>
                          <td><?= $cnt; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['notel']; ?></td>
                          <td><?= $row['tcipta']; ?></td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton<?= $row['id']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $row['id']; ?>">
                                <a class="dropdown-item" href="edit_user.php?id=<?= $row['id']; ?>">Edit</a>
                                <a class="dropdown-item delete-btn" href="#" data-id="<?= $row['id']; ?>">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php $cnt = $cnt + 1;
                      } ?>
                    </tbody>
                  </table>
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