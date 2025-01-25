<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kebakaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @media print {
            body * {
                text-align: center !important;
            }

            .container {
                width: 100% !important;
                margin: 0 !important;
            }

            .row {
                display: block !important;
                margin: 0 auto !important;
                width: 100% !important;
            }

            .col-md-6 {
                width: 100% !important;
                margin: 0 auto !important;
                text-align: center !important;
            }

            canvas {
                display: block !important;
                margin: 0 auto !important;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h1>Laporan Kebakaran</h1>
            <p>Tarikh: 25 Januari 2025</p>
        </div>

        <!-- Jadual Ringkasan Kes Kebakaran -->
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Tarikh</th>
                        <th>Kod Bangunan</th>
                        <th>Nama Bangunan</th>
                        <th>Status</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15 Januari 2025</td>
                        <td>BLD001</td>
                        <td>Alpha Tower</td>
                        <td><span class="badge badge-success">Operational</span></td>
                        <td>123 Main Street, Downtown</td>
                    </tr>
                    <tr>
                        <td>16 Januari 2025</td>
                        <td>BLD002</td>
                        <td>Beta Complex</td>
                        <td><span class="badge badge-warning">Maintenance</span></td>
                        <td>456 Elm Street, Uptown</td>
                    </tr>
                    <!-- Tambah data lain di sini -->
                    <tr>
                        <td>24 Januari 2025</td>
                        <td>BLD003</td>
                        <td>Pavilion KL</td>
                        <td><span class="badge badge-danger">Aktif (Kritikal)</span></td>
                        <td>789 Pavilion Road, KL</td>
                    </tr>
                    <tr>
                        <td>24 Januari 2025</td>
                        <td>BLD004</td>
                        <td>Hospital Putrajaya</td>
                        <td><span class="badge badge-success">Diselesaikan</span></td>
                        <td>101 Hospital Avenue, Putrajaya</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Statistik Kes Kebakaran -->
        <div class="card mb-4">
            <div class="card-header">
                Statistik Kes Kebakaran
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Jumlah Lokasi Dipantau: 15</li>
                    <li class="list-group-item">Penggera Baru Hari Ini: 6</li>
                    <li class="list-group-item">Penggera Kritikal (Aktif): 2</li>
                    <li class="list-group-item">Penggera Diselesaikan (Hari Ini): 4</li>
                    <li class="list-group-item">Lokasi Dalam Penyelenggaraan: 3</li>
                </ul>
            </div>
        </div>

        <!-- Grafik Statistik -->
        <div class="row">
            <div class="col-md-6">
                <h5>Jumlah Kes Kebakaran (Bulanan)</h5>
                <canvas id="fireCasesChart"></canvas>
            </div>
            <div class="col-md-6">
                <h5>Status Kes Kebakaran</h5>
                <canvas id="fireStatusChart"></canvas>
            </div>
        </div>

        <!-- Rincian Kes Kebakaran -->
        <div class="card mb-4">
            <div class="card-header">
                Rincian Kes Kebakaran
            </div>
            <div class="card-body">
                <h6>Pavilion KL</h6>
                <p><strong>Jenis Penggera:</strong> Pengesan Haba</p>
                <p><strong>Status:</strong> Aktif (Kritikal)</p>
                <p><strong>Masa Dicetuskan:</strong> 2025-01-24, 2:20 PM</p>
                <p><strong>Ditugaskan Kepada:</strong> Mohd Azman</p>
                <p><strong>Nota Tindakan:</strong> Menunggu pasukan Bomba</p>

                <h6>Hospital Putrajaya</h6>
                <p><strong>Jenis Penggera:</strong> Pengesan Asap</p>
                <p><strong>Status:</strong> Diselesaikan</p>
                <p><strong>Masa Dicetuskan:</strong> 2025-01-24, 1:30 PM</p>
                <p><strong>Ditugaskan Kepada:</strong> Nor Hafizah</p>
                <p><strong>Nota Tindakan:</strong> Peranti dibaiki</p>
            </div>
        </div>

        <!-- Cadangan dan Tindakan -->
        <div class="card mb-4">
            <div class="card-header">
                Cadangan dan Tindakan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lokasi Kritikal: Pavilion KL dan KLIA perlu pemantauan segera oleh pasukan bomba dan teknikal.</li>
                    <li class="list-group-item">Latihan Berkala: Cadangan untuk latihan simulasi keselamatan di semua lokasi setiap 3 bulan.</li>
                    <li class="list-group-item">Kemaskini Sistem: Menambah baik algoritma pengesanan untuk mengurangkan penggera palsu.</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Data untuk graf  
        const fireCasesCtx = document.getElementById('fireCasesChart').getContext('2d');
        new Chart(fireCasesCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mac', 'Apr', 'Mei'],
                datasets: [{
                    label: 'Kes Kebakaran',
                    data: [5, 8, 4, 7, 6],
                    backgroundColor: 'rgb(255, 0, 55)'
                }]
            }
        });

        const fireStatusCtx = document.getElementById('fireStatusChart').getContext('2d');
        new Chart(fireStatusCtx, {
            type: 'pie',
            data: {
                labels: ['Operational', 'Maintenance', 'Outage'],
                datasets: [{
                    label: 'Status',
                    data: [60, 25, 15],
                    backgroundColor: ['rgb(0, 255, 255)', 'rgb(255, 179, 0)', 'rgb(255, 0, 55)']
                }]
            }
        });
    </script>
</body>

</html>