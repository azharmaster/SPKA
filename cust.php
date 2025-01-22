
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
            <h1 class="page-title">Urus Pelanggan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?i=DB">Home</a></li>
              <li class="breadcrumb-item active">Urus Pelanggan</li>
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
              <h3 class="card-title">Senarai Pelanggan</h3>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#companyModal">
                Tambah Data
              </button>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body one">
                <table id="example1" class="table table-bordered table-hover">
                <thead class="table table-secondary">
                  <tr class="text-left">
                    <th>#</th>
                      <th>ID</th>
                      <th>Nama Syarikat </th>
                      <th>No.Pend </th>
                      <th>No.Tel </th>
                      <th>Alamat </th>
                      <th>Nama Sistem</th>
                      <th>Mula/ Tmt Kontrak</th>
                      <th>Jumlah Anggota</th>
                      <th>T.Cipta </th>
						          <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
  <tr>
    <td>1</td>
    <td>SY001</td>
    <td>Syarikat Maju Jaya</td>
    <td>123456-A</td>
    <td>03-12345678</td>
    <td>No. 1, Jalan Maju, 50000 Kuala Lumpur</td>
    <td>Smart Payroll System</td>
    <td>01/01/2023 - 31/12/2023</td>
    <td>50</td>
    <td>01/01/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>SY002</td>
    <td>Syarikat Ceria Sdn Bhd</td>
    <td>789012-B</td>
    <td>03-23456789</td>
    <td>No. 22, Jalan Ceria, 47000 Petaling Jaya</td>
    <td>HR Management System</td>
    <td>01/06/2023 - 31/05/2024</td>
    <td>30</td>
    <td>01/06/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>SY003</td>
    <td>Teknologi Pintar Sdn Bhd</td>
    <td>456789-C</td>
    <td>03-34567890</td>
    <td>No. 33, Jalan Teknologi, 40150 Shah Alam</td>
    <td>Inventory Tracking System</td>
    <td>01/09/2023 - 31/08/2024</td>
    <td>20</td>
    <td>01/09/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>SY004</td>
    <td>Kilang Besar Sdn Bhd</td>
    <td>234567-D</td>
    <td>03-45678901</td>
    <td>No. 44, Jalan Perindustrian, 81200 Johor Bahru</td>
    <td>Production Monitoring System</td>
    <td>01/03/2023 - 28/02/2024</td>
    <td>100</td>
    <td>01/03/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>SY005</td>
    <td>Global Solutions</td>
    <td>345678-E</td>
    <td>03-56789012</td>
    <td>No. 55, Jalan Antarabangsa, 50450 Kuala Lumpur</td>
    <td>Cloud Storage System</td>
    <td>01/07/2023 - 30/06/2024</td>
    <td>75</td>
    <td>01/07/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
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

    <!-- Modal -->
<div class="modal fade" id="companyModal" tabindex="-1" role="dialog" aria-labelledby="companyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="companyModalLabel">Tambah Syarikat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="companyForm">
          <div class="form-group">
            <label for="companyId">ID</label>
            <input type="text" class="form-control" id="companyId" name="companyId" required>
          </div>
          <div class="form-group">
            <label for="companyName">Nama Syarikat</label>
            <input type="text" class="form-control" id="companyName" name="companyName" required>
          </div>
          <div class="form-group">
            <label for="registrationNo">No. Pend</label>
            <input type="text" class="form-control" id="registrationNo" name="registrationNo" required>
          </div>
          <div class="form-group">
            <label for="phoneNo">No. Tel</label>
            <input type="text" class="form-control" id="phoneNo" name="phoneNo" required>
          </div>
          <div class="form-group">
            <label for="address">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
          </div>
          <div class="form-group">
            <label for="systemName">Nama Sistem</label>
            <input type="text" class="form-control" id="systemName" name="systemName" required>
          </div>
          <div class="form-group">
            <label for="contractPeriod">Mula/Tmt Kontrak</label>
            <input type="text" class="form-control" id="contractPeriod" name="contractPeriod" placeholder="Contoh: 01/01/2023 - 31/12/2023" required>
          </div>
          <div class="form-group">
            <label for="employeeCount">Jumlah Anggota</label>
            <input type="number" class="form-control" id="employeeCount" name="employeeCount" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" form="companyForm" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
 
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
