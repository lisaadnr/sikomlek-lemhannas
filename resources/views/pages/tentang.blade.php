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
    <title>Tentang | SiKomLek</title>
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
                            <h1>Tentang SiKomlek</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tentang SiKomlek</li>
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
                            <a style="margin-bottom: 20px; display: block;">
                                SiKomlek (Sistem Informasi Komunikasi dan Elektronika) adalah platform berbasis web 
                                yang dirancang untuk mempermudah proses pengelolaan data inventaris dan peminjaman alat di lingkungan Lemhannas. 
                                Melalui SiKomlek, pengguna dapat dengan mudah mencatat pengajuan peminjaman, melakukan pencarian inventaris, 
                                serta memantau status ketersediaan barang secara real-time. Sistem ini juga membantu memastikan transparansi dan 
                                akurasi data, sehingga meminimalkan potensi kesalahan dalam pencatatan aset. Dengan antarmuka yang sederhana dan 
                                mudah digunakan.
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" id="accordion">
                        <div class="col-sm-6">
                            <h3>FAQ</h3>
                        </div>
                        <div class="col-sm-12">
    <div class="card card-primary card-outline">
        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
            <div class="card-header">
                <h4 class="card-title w-100">
                    1. Apa itu SiKomlek?
                </h4>
                </div>
            </a>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    SiKomlek adalah singkatan dari Sistem Informasi Komunikasi dan Elektronika, sebuah platform digital yang dirancang untuk memudahkan pencatatan inventaris, peminjaman, dan pengembalian barang elektronika di Lemhannas secara efisien dan transparan.
                </div>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        2. Apa saja fitur utama yang tersedia di SiKomLek?
                    </h4>
                </div>
            </a>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    SiKomlek menyediakan fitur-fitur seperti pencatatan data inventaris, pengajuan peminjaman alat, pengembalian barang, serta pencatatan kondisi barang. Selain itu, SiKomlek juga memungkinkan pelacakan status peminjaman secara real-time tanpa perlu login khusus.
                </div>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        3. Siapa yang dapat menggunakan SiKomLek?
                    </h4>
                </div>
            </a>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    SiKomlek dapat digunakan oleh seluruh anggota organisasi yang memiliki kebutuhan untuk meminjam atau mengembalikan barang inventaris. Sistem ini tidak memerlukan akun login, sehingga lebih fleksibel dan memudahkan akses bagi semua pihak yang berkepentingan.
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

</body>

</html>