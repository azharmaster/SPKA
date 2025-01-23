<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'inc/meta.php'; ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="file/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="file/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="file/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js"></script>
  <style>
    #map {
      height: 800px;
    }

    .fire-icon {
      color: red;
      font-size: 24px;
    }
  </style>
</head>

<body class="hold-transition dark-mode  layout-fixed   text-sm sidebar-collapse">

  <div class="wrapper">


    <?php
    include 'inc/header.php';
    include 'inc/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <br>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">




          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-4">
              <!-- MAP & BOX PANE -->
              <div class="card">

                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="d-md-flex">
                    <div class="p-1 flex-fill" style="overflow: hidden">
                      <!-- Map will be created here -->
                      <div>
                        <div id="map" class="rounded shadow-sm" style="height: 320px;"></div>
                      </div>
                    </div>

                  </div><!-- /.d-md-flex -->
                </div>
                <!-- /.card-body -->
                
              </div>
              <!-- /.card -->



            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- MAP & BOX PANE -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover h-90 text-center">
                    <tr>
                      <th colspan="2" class="text-center">KES KEBAKARAN</th>
                    </tr>
                    <tr>
                      <th>Tarikh</th>
                      <td>15 Januari 2025</td>
                    </tr>
                    <tr>
                      <th>Bangunan</th>
                      <td>Emhub </td>
                    </tr>
                    <tr>
                      <th>Penyelia</th>
                      <td>Amir Hamzah</td>
                    </tr>
                    <tr>
                      <td><button class="btn btn-danger">Real Fire</button></td>
                      <td><button class="btn btn-warning">False Alarm</button></td>
                    </tr>
                  </table>
              
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>

            <div class="col-md-4">
              <!-- MAP & BOX PANE -->
              <div class="card ">
                <!-- Card Header -->
                <div class="card-header text-center bg-dark text-white">
                  <h4>Rakaman CCTV</h4>
                </div>
                <!-- /.card-header -->

                <!-- Card Body -->
                <div class="card-body text-center ">
                  <video width="100%" height="auto" controls>
                    <source src="sample-cctv.mp4" type="video/mp4">
                    Browser anda tidak menyokong elemen video. Sila muat turun video <a href="sample-cctv.mp4">di sini</a>.
                  </video>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <!-- <div class="card-header border-transparent">
                <h3 class="card-title">History</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div> -->
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                        <tr>
                          <th>Time</th>
                          <th>Code</th>
                          <th>Building Name</th>
                          <th>Status</th>
                          <th>Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>08:15 AM</td>
                          <td>BLD001</td>
                          <td>Alpha Tower</td>
                          <td><span class="badge badge-success">Operational</span></td>
                          <td>123 Main Street, Downtown</td>
                        </tr>
                        <tr>
                          <td>09:30 AM</td>
                          <td>BLD002</td>
                          <td>Beta Complex</td>
                          <td><span class="badge badge-warning">Maintenance</span></td>
                          <td>456 Elm Street, Uptown</td>
                        </tr>
                        <tr>
                          <td>10:45 AM</td>
                          <td>BLD003</td>
                          <td>Gamma Plaza</td>
                          <td><span class="badge badge-danger">Outage</span></td>
                          <td>789 Oak Street, Midtown</td>
                        </tr>
                        <tr>
                          <td>11:00 AM</td>
                          <td>BLD004</td>
                          <td>Delta Center</td>
                          <td><span class="badge badge-info">Inspection</span></td>
                          <td>321 Pine Street, Suburb</td>
                        </tr>
                        <tr>
                          <td>01:15 PM</td>
                          <td>BLD005</td>
                          <td>Epsilon Hall</td>
                          <td><span class="badge badge-warning">Maintenance</span></td>
                          <td>654 Maple Street, Old Town</td>
                        </tr>
                        <tr>
                          <td>02:30 PM</td>
                          <td>BLD006</td>
                          <td>Zeta Building</td>
                          <td><span class="badge badge-danger">Outage</span></td>
                          <td>987 Cedar Street, Industrial Park</td>
                        </tr>
                        <tr>
                          <td>03:45 PM</td>
                          <td>BLD007</td>
                          <td>The Horizon</td>
                          <td><span class="badge badge-success">Operational</span></td>
                          <td>147 Birch Street, Riverside</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div> -->
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include 'inc/footer.php'; ?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="file/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="file/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="file/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="file/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="file/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="file/plugins/raphael/raphael.min.js"></script>
  <script src="file/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="file/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="file/plugins/chart.js/Chart.min.js"></script>
  <script>
    // Get the canvas element
    const ctx = document.getElementById('pieChart').getContext('2d');

    // Data for the chart
    const data = {
      labels: ['Real Fire', 'Alarm', 'False Alarm'],
      datasets: [{
        data: [30, 50, 20], // Adjust these values as needed
        backgroundColor: [
          'rgba(255, 182, 193, 0.7)', // Soft pink for Real Fire
          'rgba(144, 238, 144, 0.7)', // Soft green for Alarm
          'rgba(255, 223, 186, 0.7)' // Soft orange for False Alarm
        ],
        hoverOffset: 4
      }]
    };

    // Options for the chart
    const options = {
      responsive: true,
      plugins: {
        legend: {
          display: false // Disable legend as it's handled by HTML
        }
      }
    };

    // Create the pie chart
    new Chart(ctx, {
      type: 'pie',
      data: data,
      options: options
    });
  </script>
  <!-- AdminLTE for demo purposes -->
  <script>
    // Inisialisasi peta
    const map = L.map('map').setView([4.2105, 101.9758], 6); // Pusat Malaysia

    // Tambah lapisan OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Data kebakaran setiap negeri
    const fireData = [{
        negeri: 'Johor',
        coord: [1.4854, 103.7618],
        jumlah: 10
      },
      {
        negeri: 'Kedah',
        coord: [6.1184, 100.3686],
        jumlah: 5
      },
      {
        negeri: 'Kelantan',
        coord: [6.1254, 102.2381],
        jumlah: 7
      },
      {
        negeri: 'Melaka',
        coord: [2.1896, 102.2501],
        jumlah: 3
      },
      {
        negeri: 'Negeri Sembilan',
        coord: [2.7258, 101.9424],
        jumlah: 4
      },
      {
        negeri: 'Pahang',
        coord: [3.8126, 103.3256],
        jumlah: 8
      },
      {
        negeri: 'Penang',
        coord: [5.4141, 100.3288],
        jumlah: 6
      },
      {
        negeri: 'Perak',
        coord: [4.5921, 101.0901],
        jumlah: 9
      },
      {
        negeri: 'Perlis',
        coord: [6.4448, 100.2043],
        jumlah: 2
      },
      {
        negeri: 'Sabah',
        coord: [5.9788, 116.0753],
        jumlah: 12
      },
      {
        negeri: 'Sarawak',
        coord: [1.5533, 110.3592],
        jumlah: 15
      },
      {
        negeri: 'Selangor',
        coord: [3.0738, 101.5183],
        jumlah: 11
      },
      {
        negeri: 'Terengganu',
        coord: [5.3117, 103.1324],
        jumlah: 7
      },
    ];

    // Tambah penanda (marker) dengan ikon kebakaran
    fireData.forEach(data => {
      const fireIcon = L.divIcon({
        html: `<i class="fas fa-burn fire-icon"></i>`,
        className: 'custom-icon',
        iconSize: [30, 30], // Saiz ikon
        iconAnchor: [15, 15] // Kedudukan titik anchor
      });

      L.marker(data.coord, {
          icon: fireIcon
        })
        .addTo(map)
        .bindPopup(`<b>Negeri:</b> ${data.negeri}<br><b>Jumlah Kebakaran:</b> ${data.jumlah}`);
    });
  </script>

  <script>
    // Ambil elemen canvas
    const ctx1 = document.getElementById('fireChart').getContext('2d');

    // Data untuk graf
    const data1 = {
      labels: ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'],
      datasets: [{
        label: 'Jumlah Kebakaran',
        data: [5, 8, 10, 15, 20, 18, 25, 30, 22, 17, 12, 10], // Gantikan dengan data sebenar
        backgroundColor: 'rgba(255, 99, 132, 0.5)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    };

    // Pilihan untuk graf
    const options1 = {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        tooltip: {
          callbacks: {
            label: function(tooltipItem) {
              return `Jumlah: ${tooltipItem.raw}`;
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Jumlah Kebakaran'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Bulan'
          }
        }
      }
    };

    // Cipta graf bar
    new Chart(ctx1, {
      type: 'bar',
      data: data,
      options: options
    });
  </script>

  <script>
    // Ambil elemen canvas
    const ctx2 = document.getElementById('alarmChart').getContext('2d');

    // Data untuk graf jumlah alarm setiap bulan
    const data2 = {
      labels: ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'],
      datasets: [{
        label: 'Jumlah Alarm',
        data: [12, 18, 9, 14, 20, 22, 15, 30, 25, 28, 19, 16], // Gantikan dengan data sebenar
        backgroundColor: 'rgba(173, 216, 230, 0.6)', // Warna pastel biru muda
        borderColor: 'rgba(135, 206, 250, 1)', // Warna biru muda lembut
        borderWidth: 1
      }]
    };

    // Pilihan untuk graf
    const options2 = {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        tooltip: {
          callbacks: {
            label: function(tooltipItem) {
              return `Jumlah: ${tooltipItem.raw}`;
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Jumlah Alarm'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Bulan'
          }
        }
      }
    };

    // Cipta graf bar
    new Chart(ctx2, {
      type: 'bar',
      data: data2,
      options: options2
    });
  </script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>