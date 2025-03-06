<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    @vite(['resources/css/adminlte.css'])    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Dashboard | SiKomLek</title>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">  
    @include('layout.sidebar')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-body">
                                    <!-- Small Box (Stat card) -->
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <!-- small card -->
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                    <h3>{{ $totalBarang }}</h3>
                                                    <p>Total Barang</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fas fa-desktop"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-lg-3 col-6">
                                            <!-- small card -->
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3>n</h3>

                                                    <p>Barang Tersedia</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-stats-bars"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-lg-3 col-6">
                                            <!-- small card -->
                                            <div class="small-box bg-danger">
                                                <div class="inner">
                                                    <h3>n</h3>
                                                    <p>Barang Rusak</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- ./col -->
                                        <!-- ./col -->
                                        <div class="col-lg-3 col-6">
                                            <!-- small card -->
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h3>n</h3>

                                                    <p>Barang Dipinjam</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fas fa-download"></i>
                                                </div>
                                                <a href="#" class="small-box-footer">
                                                    More info <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Bar Chart -->
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="far fa-chart-bar"></i> Bar Chart
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar-chart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Line Chart -->
                            <div class="col-md-6">
                                <div class="card card-info card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-line"></i> Line Chart
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="line-chart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <!-- /.content -->
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">

            </div>
            <strong>.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Bar Chart Configuration
            const barCtx = document.getElementById('bar-chart').getContext('2d');
            const barChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Data Barang',
                        data: [10, 8, 4, 13, 17, 9],
                        backgroundColor: 'rgba(229, 184, 244, 0.8)',
                        borderColor: 'rgba(183, 147, 195, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: (context) => `${context.label}: ${context.raw}`
                            }
                        }
                    },
                    scales: {
                        x: { beginAtZero: true },
                        y: { beginAtZero: true }
                    }
                }
            });
    
            // Line Chart Configuration
            const lineCtx = document.getElementById('line-chart').getContext('2d');
            const lineChart = new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    datasets: [{
                        label: 'Visitors',
                        data: [820, 950, 740, 1020, 1130, 1230, 1400],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: (context) => `${context.label}: ${context.raw}`
                            }
                        }
                    },
                    scales: {
                        x: { beginAtZero: true },
                        y: { beginAtZero: true }
                    }
                }
            });

            window.addEventListener('resize', () => {
    myChart.resize();
});
        });
    </script>
</body>
</html>