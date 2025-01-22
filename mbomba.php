
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
            <h1 class="page-title">Urus Balai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?i=DB">Home</a></li>
              <li class="breadcrumb-item active">Urus Balai</li>
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
                <h3 class="card-title">Senarai Balai</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#supervisorModal">
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
                      <th>Penyelia </th>
                      <th>No.Tel </th>
                      <th>Alamat </th>
                      <th>Koordinat</th>
                      <th>Jumlah Anggota</th>
                      <th>T.Cipta </th>
											<th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
  <tr>
    <td>1</td>
    <td>BB001</td>
    <td>Encik Ahmad bin Razak</td>
    <td>03-12345678</td>
    <td>No. 1, Jalan Bomba, 50000 Kuala Lumpur</td>
    <td>3.1390° N, 101.6869° E</td>
    <td>30</td>
    <td>01/01/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>BB002</td>
    <td>Encik Ismail bin Rahim</td>
    <td>03-23456789</td>
    <td>No. 22, Jalan Merah, 47000 Petaling Jaya</td>
    <td>3.1072° N, 101.6078° E</td>
    <td>25</td>
    <td>01/06/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>BB003</td>
    <td>Encik Zainal bin Osman</td>
    <td>03-34567890</td>
    <td>No. 33, Jalan Shah Alam, 40150 Shah Alam</td>
    <td>3.0738° N, 101.5183° E</td>
    <td>40</td>
    <td>01/09/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>BB004</td>
    <td>Encik Hakim bin Aziz</td>
    <td>03-45678901</td>
    <td>No. 44, Jalan Bukit Indah, 81200 Johor Bahru</td>
    <td>1.4927° N, 103.7414° E</td>
    <td>35</td>
    <td>01/03/2023</td>
    <td>
      <button class="btn btn-primary btn-sm">Lihat</button>
      <button class="btn btn-warning btn-sm">Edit</button>
      <button class="btn btn-danger btn-sm">Padam</button>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>BB005</td>
    <td>Encik Ramli bin Hashim</td>
    <td>03-56789012</td>
    <td>No. 55, Jalan Api, 50450 Kuala Lumpur</td>
    <td>3.1599° N, 101.7090° E</td>
    <td>50</td>
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
<div class="modal fade" id="supervisorModal" tabindex="-1" role="dialog" aria-labelledby="supervisorModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supervisorModalLabel">Tambah Balai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="supervisorForm">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" required>
          </div>
          <div class="form-group">
            <label for="supervisor">Penyelia</label>
            <input type="text" class="form-control" id="supervisor" name="supervisor" required>
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
            <label for="coordinates">Koordinat</label>
            <input type="text" class="form-control" id="coordinates" name="coordinates" placeholder="Contoh: 3.123456, 101.654321" required>
          </div>
          <div class="form-group">
            <label for="employeeCount">Jumlah Anggota</label>
            <input type="number" class="form-control" id="employeeCount" name="employeeCount" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" form="supervisorForm" class="btn btn-primary">Simpan</button>
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
