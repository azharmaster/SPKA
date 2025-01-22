
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
  <!-- DataTables --><link rel="stylesheet" href="file/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
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
            <h1 class="page-title">Alarm Varification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?i=DB">Home</a></li>
              <li class="breadcrumb-item active">Alarm Varification</li>
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
            <div class="card-header text-center">
              <div class="row">
                <div class="col-6">
                <button type="button" class="btn btn-danger w-100" >
                Real Alarm
              </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-warning w-100" >
                    False Alarm
                  </button>
                </div>
                </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body ">
                <div style="background-color: rgb(255, 196, 0);  padding: 15px; margin-bottom: 15px; border-radius: 15px;" > 
                <i class="fas fa-bell"></i> Alarm / <?= date('Y-m-d H:i:s') ?>
                </div>
                <div style="background-color: rgb(162, 0, 255); color:white;  padding: 15px; margin-bottom: 15px; border-radius: 15px;" > 
                <i class="fas fa-sync-alt"></i> Reset / <?= date('Y-m-d H:i:s') ?>
                </div>
                <div style="background-color: rgb(255, 196, 0);  padding: 15px; margin-bottom: 15px; border-radius: 15px;" > 
                <i class="fas fa-bell"></i> Alarm / <?= date('Y-m-d H:i:s') ?>
                </div>
                <div style="background-color: rgb(162, 0, 255); color:white; padding: 15px; margin-bottom: 15px; border-radius: 15px;" > 
                <i class="fas fa-sync-alt"></i> Reset / <?= date('Y-m-d H:i:s') ?>
                </div>
                

                <div class="direct-chat-messages">
                      <!-- Message. Default to the left -->
                     

                      <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right">Yusuff</span>
                          <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="file/dist/img/user8-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                        This is real alarm?
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Mohd Amin</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="file/dist/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Yes. Smoke Detector.
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right">Yusuff</span>
                          <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="file/dist/img/user8-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Okay Noted.
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                    </div>

                    <div style="background-color: rgb(0, 0, 0); color:white; padding: 15px; margin-bottom: 15px; border-radius: 15px;" > 
                    <i class="fas fa-times"></i> False Alarm / <?= date('Y-m-d H:i:s') ?>
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
  $(function () {
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
