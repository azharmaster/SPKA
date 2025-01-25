<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kebakaran Bangunan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Gaya untuk paparan biasa */
        body {
            font-size: 14px;
            line-height: 1.6;
        }
        .container {
            margin: 0 auto;
            max-width: 900px;
        }
        .card {
            border: 1px solid #ddd;
            margin-bottom: 15px;
        }
        .card-header {
            padding: 10px;
        }
        .card-body {
            padding: 10px 15px;
        }

        /* Gaya cetakan */
        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 12px;
                line-height: 1.4;
            }
            .container {
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .card {
                border: none;
                margin: 0;
            }
            .card-header {
                font-size: 14px;
                font-weight: bold;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <!-- Header -->
        <div class="text-center mb-3">
            <h3>Laporan Kebakaran Bangunan</h3>
            <p>Tarikh: 25 Januari 2025</p>
        </div>

        <!-- Maklumat Umum Bangunan -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                Maklumat Bangunan
            </div>
            <div class="card-body">
                <strong>Nama Bangunan:</strong> Alpha Tower<br>
                <strong>Jenis Bangunan:</strong> Komersial<br>
                <strong>Penyelia Bangunan:</strong> Amir Hamzah<br>
                <strong>Alamat:</strong> 123 Main Street, Downtown<br>
            </div>
        </div>

        <!-- Maklumat Kes Kebakaran -->
        <div class="card">
            <div class="card-header bg-danger text-white">
                Maklumat Kes Kebakaran
            </div>
            <div class="card-body">
                <strong>Tarikh Kejadian:</strong> 15 Januari 2025<br>
                <strong>Jenis Laporan:</strong> <span class="badge badge-danger">Real Fire</span><br>
                <strong>Tingkat Terlibat:</strong> Tingkat 3<br>
                <strong>Lot Kedai:</strong> Lot 305<br>
                <strong>Punca Kebakaran:</strong> Litar pintas<br>
                <strong>Status Kebakaran:</strong> <span class="badge badge-success">Selesai</span><br>
                <strong>Jumlah Orang Terlibat:</strong> 25 orang<br>
                <strong>Jumlah Kerugian:</strong> RM 150,000<br>
            </div>
        </div>

        <!-- Graf Statistik Kebakaran Bulanan -->
        <div class="card">
            <div class="card-header bg-info text-white">
                Graf Statistik Kebakaran Bulanan
            </div>
            <div class="card-body">
                <canvas id="fireChart" width="400" height="200"></canvas>
            </div>
        </div>

        <!-- Cetak -->
        <div class="text-center no-print mt-3">
            <button class="btn btn-primary" onclick="window.print()">Cetak Laporan</button>
        </div>
    </div>

    <!-- Skrip untuk Graf -->
    <script>
        const ctx = document.getElementById('fireChart').getContext('2d');
        const fireChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sep', 'Okt', 'Nov', 'Dis'],
                datasets: [{
                    label: 'Jumlah Kebakaran',
                    data: [0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0], // Contoh data
                    backgroundColor: 'rgba(255, 0, 55, 0.2)',
                    borderColor: 'rgb(255, 0, 55)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
