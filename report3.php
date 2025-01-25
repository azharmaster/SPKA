<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kebakaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-4">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1>Laporan Kebakaran</h1>
            <p>Tarikh: 25 Januari 2025</p>
        </div>

        <!-- Maklumat Kes -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h5>Maklumat Kes Kebakaran (Selesai)</h5>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <strong>Tarikh Kejadian:</strong>
                        <p>15 Januari 2025</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Kod Bangunan:</strong>
                        <p>BLD001</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <strong>Nama Bangunan:</strong>
                        <p>Alpha Tower</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Status:</strong>
                        <span class="badge badge-success">Selesai</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <strong>Alamat:</strong>
                        <p>123 Main Street, Downtown</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Punca Kebakaran:</strong>
                        <p>Litar pintas pada tingkat 3.</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Jumlah Kerugian:</strong>
                        <p>RM 150,000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graf Kebakaran Bulanan -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h5>Graf Statistik Kebakaran Bulanan - Alpha Tower</h5>
            </div>
            <div class="card-body">
                <canvas id="fireChart" width="400" height="200"></canvas>
            </div>
        </div>

        <!-- Tambahan Bahagian Lain Jika Perlu -->
        <div class="mt-4 text-center">
            <button class="btn btn-primary">Cetak Laporan</button>
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
                    data: [1, 0, 2, 0, 1, 1, 0, 3, 0, 1, 0, 1], // Contoh data
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
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
