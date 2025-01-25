<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kebakaran Alpha Tower</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .chart-container {
            width: 100%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Laporan Kebakaran Alpha Tower</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Maklumat Kebakaran</h5>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Tingkat</th>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">Punca Kebakaran</th>
                            <td>Kabel elektrik rosak</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombor Lot Kedai</th>
                            <td>A12</td>
                        </tr>
                        <tr>
                            <th scope="row">Status Kebakaran</th>
                            <td>Dipadamkan</td>
                        </tr>
                        <tr>
                            <th scope="row">Jumlah Orang Terlibat</th>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th scope="row">Penyelia Bangunan</th>
                            <td>Ahmad Ali</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Bangunan</th>
                            <td>Komersial</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Laporan</th>
                            <td>Kebakaran Sebenar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="chart-container">
            <canvas id="fireChart"></canvas>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('fireChart').getContext('2d');
        var fireChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'],
                datasets: [{
                        label: 'Jumlah Kebakaran',
                        data: [5, 3, 8, 2, 6, 4, 7, 3, 5, 2, 4, 6],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Kebakaran Dipadamkan',
                        data: [4, 2, 7, 1, 5, 3, 6, 2, 4, 1, 3, 5],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Kebakaran Tidak Dipadamkan',
                        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }
                ]
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