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
                </tbody>
            </table>
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