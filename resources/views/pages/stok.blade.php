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
    <title>Stok | SiKomLek</title>

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
                            <h1>Manajemen Stok</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Stok Hardware</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
             
            <section class="content">
                <div class="container-fluid">
            
                    <!-- Tombol Tambah Hardware -->
                    <div class="row mb-3">
                        <div class="col-12 text-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalTambahHardware">
                                <i class="fas fa-plus"></i> Tambah Hardware
                            </button>
                        </div>
                    </div>
            
                    <!-- Tabel Stok Hardware -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Stok Hardware</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Hardware</th>
                                                <th>Merek</th>
                                                <th>Tipe</th>
                                                <th>Jumlah</th>
                                                <th>Tahun Pengadaan</th>
                                                <th>Penyedia</th>
                                                <th>No. Kontrak</th>
                                                <th>Ket.</th>
                                                <th>Lokasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($inventaris as $index => $barang)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $barang->nama_barang }}</td>
                                                <td>{{ $barang->merek }}</td>
                                                <td>{{ $barang->tipe }}</td>
                                                <td>{{ $barang->jumlah }}</td>
                                                <td>{{ $barang->tahun_pengadaan }}</td>
                                                <td>{{ $barang->penyedia }}</td>
                                                <td>{{ $barang->nomor_kontrak }}</td>
                                                <td>{{ $barang->keterangan }}</td>
                                                <td>{{ $barang->lokasi }}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Modal Tambah Hardware -->
                <div class="modal fade" id="modalTambahHardware" tabindex="-1" aria-labelledby="modalTambahHardwareLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTambahHardwareLabel">Tambah Hardware Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('stok.store') }}" method="POST">
                                <div class="modal-body">
                                    <!-- Nama Hardware -->
                                    <div class="form-group">
                                        <label for="namaHardware">Nama Hardware</label>
                                        <input type="text" class="form-control" id="namaHardware" placeholder="Masukkan nama hardware" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="merekBarang">Merek</label>
                                        <input type="text" class="form-control" id="merekBarang" placeholder="Masukkan nama merek" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tipeBarang">Tipe</label>
                                        <input type="text" class="form-control" id="tipeBarang" placeholder="Masukkan tipe" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlahBarang">Jumlah</label>
                                        <input type="text" class="form-control" id="jumlahBarang" placeholder="Masukkan jumlah barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahunPengadaan">Tahun Pengadaan</label>
                                        <input type="text" class="form-control" id="tahunPengadaan" placeholder="Masukkan tahun pengadaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="penyedia">Penyedia</label>
                                        <input type="text" class="form-control" id="penyedia" placeholder="Masukkan tahun pengadaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomorKontrak">Nomor Kontrak</label>
                                        <input type="text" class="form-control" id="nomorKontrak" placeholder="Masukkan nomor kontrak" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan" placeholder="Masukkan keterangan barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" placeholder="Masukkan lokasi" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
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