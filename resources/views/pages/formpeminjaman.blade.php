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
    <title>Peminjaman | SiKomLek</title>    
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
                                <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('pages.pinjamalat') }}">Peminjaman Alat</a></li>
                                <li class="breadcrumb-item active">Pinjam Alat</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Peminjaman</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="nama_peminjam">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" placeholder="Masukkan Nama Lengkap">
        </div>

        <div class="form-group">
            <label for="nip">NIP/NRP</label>
            <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukkan NIP/NRP" required>
        </div>

        <div class="form-group">
            <label for="unit_kerja">Unit Kerja</label>
            <input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Masukkan Unit Kerja" required>
        </div>

        <!-- Barang dari Inventaris -->
        <div class="form-group">
            <label for="inventaris_id">Barang yang Dipinjam</label>
            <select class="form-control" name="inventaris_id" id="inventaris_id" required>
                @foreach($inventaris as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nama_barang }} - {{ $item->merek }} - {{ $item->tipe }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah_unit">Jumlah Unit</label>
            <input type="number" class="form-control" name="jumlah_unit" id="jumlah_unit" placeholder="Jumlah unit yang ingin dipinjam" required>
        </div>

        <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" required>
        </div>

        <div class="form-group">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Ajukan</button>
        </div>
    </div>
</form>

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