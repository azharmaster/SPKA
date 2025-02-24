<?php
session_start();
include 'inc/config.php';

if (!isset($_SESSION['alogin'])) {
  header("Location: index.php");
  exit();
}

if (isset($_POST['submit'])) {
  $pelanggan=$_POST['pelanggan'];
  $kategori=$_POST['kategori'];
  $mulalggn=$_POST['mulalggn'];
  $tmtlggn=$_POST['tmtlggn'];
  $penyelia=$_POST['penyelia'];
  $notel=$_POST['notel'];
  $alamat=$_POST['alamat'];
  $koordinat=$_POST['koordinat'];
  $cctv=$_POST['cctv'];
  $jum=$_POST['jum'];


  $sql=mysqli_query($con,"INSERT INTO `banggunan`( `id_pelanggan`, `kategori`, `mulaLangganan`, `tmtLangganan`, `penyelia`, `notel`, `alamat`, `koordinat`, `CCTV`, `jumAnggota`, `tcipta`) 
  VALUES ('$pelanggan','$kategori','$mulalggn','$tmtlggn','$penyelia','$notel','$alamat','$koordinat','$cctv','$jum','$currentTime')");
  if($sql){
    echo "<script type='text/javascript'> alert('Data Berjaya Disimpan.');  </script>";
  }else{
    echo "<script type='text/javascript'> alert('Maaf!! Data Tidak Berjaya Disimpan.');  </script>";
  }

}


if (isset($_POST['del'])) {

  $id=$_POST['id'];

  $sql=mysqli_query($con,"DELETE FROM `banggunan` WHERE id='$id'");
  if($sql){
    echo "<script type='text/javascript'> alert('Data Berjaya Dipadam.');  </script>";
  }else{
    echo "<script type='text/javascript'> alert('Maaf!! Data Tidak Berjaya Dipadam.');  </script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'inc/meta.php'; ?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                            <h1 class="page-title">Urus Bangunan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="?i=DB">Home</a></li>
                                <li class="breadcrumb-item active">Urus Bangunan</li>
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
                                    <h3 class="card-title">Senarai Bangunan</h3>
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#subscriptionModal">
                                        Tambah Data
                                    </button>

                                </div>

                                <!-- /.card-header -->
                                <div class="card-body one">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead class="table table-secondary">
                                            <tr class="text-left">
                                                <th>#</th>
                                                <th>Syarikat</th>
                                                <th>Kategori</th>
                                                <th>Mula/Tmt Langganan </th>
                                                <th>Penyelia </th>
                                                <th>No.Tel </th>
                                                <th>Alamat </th>
                                                <th>P.Lantai</th>
                                                <th>Koordinat</th>
                                                <th>CCTV</th>
                                                <th>Jum Orang</th>
                                                <th>T.Cipta </th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                      $query = mysqli_query($con, "SELECT b.*,p.syarikat FROM `banggunan` b JOIN `pelanggan` p 
                      ON b.id_pelanggan=p.id");
                      $cnt = 1;
                      while ($row = mysqli_fetch_array($query)) {

                      ?>
                                            <tr>
                                                <td><?= $cnt; ?></td>
                                                <td><?= $row['syarikat']; ?></td>
                                                <td><?= $row['kategori']; ?></td>
                                                <td><?= $row['mulaLangganan']; ?>/<?= $row['tmtLangganan']; ?></td>
                                                <td><?= $row['penyelia']; ?></td>
                                                <td><?= $row['notel']; ?></td>
                                                <td><?= $row['alamat']; ?></td>
                                                <td>Tiada</td>
                                                <td><?= $row['koordinat']; ?></td>
                                                <td><?= $row['CCTV']; ?></td>
                                                <td><?= $row['jumAnggota']; ?></td>
                                                <td><?= $row['tcipta']; ?></td>

                                                <td>
                                                    <button type="button"
                                                        class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon"
                                                        data-toggle="dropdown">
                                                        Action
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">

                                                        <form method="POST">
                                                            <input type="hidden" name="id"
                                                                value="<?= htmlspecialchars($row['id']) ?>">
                                                            <button class="dropdown-item delete_data" type="submit"
                                                                name="del"
                                                                onClick="return confirm('Adakah anda pasti mahu memadamkan?')">
                                                                <span class="fas fa-trash text-danger"></span> Padam
                                                            </button>
                                                        </form>
                                                        <a class="dropdown-item"
                                                            href="profile.php?id=<?= htmlspecialchars($row['id']) ?>">
                                                            <span class="fas fa-user"></span> Lihat Profile
                                                        </a>
                                                        <a class="dropdown-item"
                                                            href="edit.php?id=<?= htmlspecialchars($row['id']) ?>">
                                                            <span class="fas fa-edit"></span> Kemaskini
                                                        </a>
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

            <!-- Modal -->
            <div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog"
                aria-labelledby="subscriptionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="subscriptionModalLabel">Tambah Bangunan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">

                                <div class="form-group">
                                    <label for="category">Syarikat</label>
                                    <select class="form-control" name="pelanggan">
                                        <option value="">Pilih Pelanggan</option>
                                        <?php 
                     $qry = mysqli_query($con, "SELECT * FROM `pelanggan`");
                     while ($rw = mysqli_fetch_array($qry)) {
                    ?>
                                        <option value="<?= $rw['id'] ?>"><?= $rw['syarikat'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="supervisor">Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option value="Pejabat">Pejabat</option>
                                        <option value="Kilang">Kilang</option>
                                        <option value="Gudang">Gudang</option>
                                        <option value="Kompleks Sukan">Kompleks Sukan</option>
                                        <option value="Pusat Latihan">Pusat Latihan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="mulalggn">Mula Langganan</label>
                                    <input type="date" class="form-control" id="mulalggn" name="mulalggn"
                                        placeholder="Contoh: 01/01/2023" required>
                                </div>

                                <div class="form-group">
                                    <label for="tmtlggn">Tamat Langganan</label>
                                    <input type="date" class="form-control" id="tmtlggn" name="tmtlggn"
                                        placeholder="Contoh:  31/12/2023" required>
                                </div>

                                <div class="form-group">
                                    <label for="penyelia">Penyelia</label>
                                    <input type="text" class="form-control" id="penyelia" name="penyelia" required>
                                </div>

                                <div class="form-group">
                                    <label for="notel">No. Tel</label>
                                    <input type="text" class="form-control" id="notel" name="notel" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2"
                                        required></textarea>
                                </div>

                                <!-- <div class="form-group">
                  <label for="floor">P.Lantai</label>
                  <input type="text" class="form-control" id="floor" name="floor" required>
                </div> -->

                                <div class="form-group">
                                    <label for="koordinat">Koordinat</label>
                                    <input type="text" class="form-control" id="koordinat" name="koordinat"
                                        placeholder="Contoh: 3.123456, 101.654321" required>
                                </div>

                                <div class="form-group">
                                    <label for="cctv">CCTV</label>
                                    <select class="form-control" id="cctv" name="cctv" required>
                                        <option value="Ada">Ada</option>
                                        <option value="Tiada">Tiada</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="peopleCount">Jum Orang</label>
                                    <input type="number" class="form-control" id="jum" name="jum" required>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
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