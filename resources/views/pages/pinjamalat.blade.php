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
    <title>Pinjam | SiKomLek</title>
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
                            <h1>Peminjaman Alat</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Peminjaman Alat</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Persyaratan dan Kewajiban -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Persyaratan Pinjam Alat</h5>
                                </div>
                                <div class="card-body">
                                    <ol>
                                        <li>Alat hanya boleh dipinjam untuk keperluan dinas/pekerjaan</li>
                                        <li>Peminjaman dilakukan dengan mengisi form peminjaman secara lengkap</li>
                                        <li>Jumlah unit yang dipinjam harus sesuai dengan kebutuhan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Kewajiban Pengembalian Alat</h5>
                                </div>
                                <div class="card-body">
                                    <ol>
                                        <li>Kelengkapan alat sama seperti saat dipinjam</li>
                                        <li>Jika ada kehilangan akan diberikan denda</li>
                                        <li>Apabila barang rusak, wajib melaporkan ke staf Komlek dan bertanggung jawab</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="container d-flex justify-content-center">
                            <div class="row mt-4 text-center w-100">
                                <div class="col-md-6 text-center">
                                    <a href="{{ route('pages.formpeminjaman') }}" class="btn btn-primary btn-lg btn-block">Pinjam</a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="{{ route('pages.formpengembalian') }}" class="btn btn-danger btn-lg btn-block">Kembalikan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" id="accordion">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3 text-center">

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