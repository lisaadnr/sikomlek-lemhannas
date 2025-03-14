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
    @vite(['resources/css/adminlte.css'])
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Title -->
    <title>Inventory | SisInfoKomLek</title>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
    @include('layout.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Persediaan Gudang</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Persediaan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <a style="margin-bottom: 20px; display: block;">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                        quasi
                                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                        voluptas
                                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione
                                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                        dolor sit
                                        amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                        incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                        quis
                                        nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                                        commodi
                                        consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                        esse quam
                                        nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                                        pariatur?"
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Grafik Ketersediaan Alat</h3>
                                </div>

                                <!-- Bar Chart -->
                                <div class="col-md-12">
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
                                            <canvas id="barangChart" style="width: 100%; height: 400px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Data Barang</h3>
                                </div>

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
                                                            <h3>{{ $jumlahMonitor }}</h3>
                                                            <p>Monitor</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-desktop"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahKeyboard }}</h3>
                                                            <p>Keyboard</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-keyboard"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahMouse }}</h3>
                                                            <p>Mouse</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-mouse"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahPrinter }}</h3>
                                                            <p>Printer</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-print"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-info">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahScanner }}</h3>
                                                            <p>Scanner</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-scanner"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahWebcam }}</h3>
                                                            <p>Webcam</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-video"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahSpeaker }}</h3>
                                                            <p>Speaker</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-volume-up"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahMicrophone }}</h3>
                                                            <p>Microphone</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-microphone"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-info">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahProjector }}</h3>
                                                            <p>Projector</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-projector"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahRouter }}</h3>
                                                            <p>Router</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-wifi"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahSwitch }}</h3>
                                                            <p>Switch</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-network-wired"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahFirewall }}</h3>
                                                            <p>Firewall</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-shield-alt"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-info">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahNAS }}</h3>
                                                            <p>NAS</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-hdd"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahUPS }}</h3>
                                                            <p>UPS</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-battery-full"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahServer }}</h3>
                                                            <p>Server</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-server"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahPC }}</h3>
                                                            <p>PC</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-shield-alt"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-info">
                                                        <div class="inner">
                                                            <h3>{{ $jumlahLaptop }}</h3>
                                                            <p>Laptop</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-hdd"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('barangChart').getContext('2d');
        var barangChart = new Chart (ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($namaBarang) !!},
                datasets: [{
                    label: 'Jumlah Barang',
                    data: {!! json_encode($jumlahBarang) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
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