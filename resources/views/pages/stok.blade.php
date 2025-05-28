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
                                                <th>Keterangan</th>
                                                <th>Lokasi</th>
                                                <th>Tersedia</th>
                                                <th>Terpinjam</th>
                                                <th>Rusak</th>
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
                                                <td>{{ $barang->tersedia }}</td>
                                                <td>{{ $barang->terpinjam }}</td>
                                                <td>{{ $barang->rusak }}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm btnEdit"
                                                        data-id="{{ $barang->id}}"
                                                        data-nama="{{ $barang->nama_barang }}"
                                                        data-merek="{{ $barang->merek }}"
                                                        data-tipe="{{ $barang->tipe }}"
                                                        data-jumlah="{{ $barang->jumlah }}"
                                                        data-tahun="{{ $barang->tahun_pengadaan }}"
                                                        data-penyedia="{{ $barang->penyedia }}"
                                                        data-nomor="{{ $barang->nomor_kontrak }}"
                                                        data-keterangan="{{ $barang->keterangan }}"
                                                        data-lokasi="{{ $barang->lokasi }}"
                                                        data-tersedia="{{ $barang->tersedia }}"
                                                        data-terpinjam="{{ $barang->terpinjam }}"
                                                        data-rusak="{{ $barang->rusak }}"
                                                        data-toggle="modal" data-target="#modalEditHardware">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <form action="{{ route('stok.destroy', $barang->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus barang ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTambahHardwareLabel">Tambah Hardware Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                             <form action="{{ route('stok.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
                                        @error('nama_barang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="merek">Merek</label>
                                        <input type="text" class="form-control" id="merek" name="merek" value="{{ old('merek') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="tipe">Tipe</label>
                                        <input type="text" class="form-control" id="tipe" name="tipe" value="{{ old('tipe') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah', 1) }}" required min="1">
                                        @error('jumlah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tahun_pengadaan">Tahun Pengadaan</label>
                                        <input type="number" class="form-control @error('tahun_pengadaan') is-invalid @enderror" id="tahun_pengadaan" name="tahun_pengadaan" value="{{ old('tahun_pengadaan') }}" required min="1900" max="{{ date('Y') }}">
                                        @error('tahun_pengadaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="penyedia">Penyedia</label>
                                        <input type="text" class="form-control" id="penyedia" name="penyedia" value="{{ old('penyedia') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nomor_kontrak">Nomor Kontrak</label>
                                        <input type="text" class="form-control" id="nomor_kontrak" name="nomor_kontrak" value="{{ old('nomor_kontrak') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control" id="keterangan" name="keterangan">{{ old('keterangan') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="lokasi">Lokasi</label>
                                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>
                                        @error('lokasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Input untuk tersedia, terpinjam, rusak -->
                                    <div class="form-group">
                                        <label for="tersedia">Jumlah Tersedia</label>
                                        <input type="number" class="form-control @error('tersedia') is-invalid @enderror" id="tersedia" name="tersedia" value="{{ old('tersedia', 0) }}" required min="0">
                                        @error('tersedia')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="terpinjam">Jumlah Terpinjam</label>
                                        <input type="number" class="form-control @error('terpinjam') is-invalid @enderror" id="terpinjam" name="terpinjam" value="{{ old('terpinjam', 0) }}" required min="0">
                                        @error('terpinjam')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="rusak">Jumlah Rusak</label>
                                        <input type="number" class="form-control @error('rusak') is-invalid @enderror" id="rusak" name="rusak" value="{{ old('rusak', 0) }}" required min="0">
                                        @error('rusak')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Tambah Barang</button>
                                    <a href="{{ route('stok.index') }}" class="btn btn-secondary">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit Hardware -->
                <div class="modal fade" id="modalEditHardware" tabindex="-1" aria-labelledby="modalEditHardwareLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditHardwareLabel">Edit Hardware</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form   id="formEditHardware" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <input type="hidden" id="editId" name="id">

                                    <!-- Jumlah -->
                                    <div class="form-group">
                                        <label for="editJumlah">Jumlah</label>
                                        <input type="number" class="form-control" id="editJumlah" name="jumlah" required>
                                    </div>

                                    <!-- Tahun Pengadaan -->
                                    <div class="form-group">
                                        <label for="editTahun">Tahun Pengadaan</label>
                                        <input type="number" class="form-control" id="editTahun" name="tahun_pengadaan" required>
                                    </div>

                                    <!-- Penyedia -->
                                    <div class="form-group">
                                        <label for="editPenyedia">Penyedia</label>
                                        <input type="text" class="form-control" id="editPenyedia" name="penyedia" required>
                                    </div>

                                    <!-- Nomor Kontrak -->
                                    <div class="form-group">
                                        <label for="editNomor">Nomor Kontrak</label>
                                        <input type="text" class="form-control" id="editNomor" name="nomor_kontrak" required>
                                    </div>

                                    <!-- Keterangan -->
                                    <div class="form-group">
                                        <label for="editKeterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="editKeterangan" name="keterangan">
                                    </div>

                                    <!-- Lokasi -->
                                    <div class="form-group">
                                        <label for="editLokasi">Lokasi</label>
                                        <input type="text" class="form-control" id="editLokasi" name="lokasi" required>
                                    </div>

                                    <!-- Tersedia -->
                                    <div class="form-group">
                                        <label for="editTersedia">Tersedia</label>
                                        <input type="number" class="form-control" id="editTersedia" name="tersedia" required>
                                    </div>

                                    <!-- Terpinjam -->
                                    <div class="form-group">
                                        <label for="editTerpinjam">Terpinjam</label>
                                        <input type="number" class="form-control" id="editTerpinjam" name="terpinjam" required>
                                    </div>

                                    <!-- Rusak -->
                                    <div class="form-group">
                                        <label for="editRusak">Rusak</label>
                                        <input type="number" class="form-control" id="editRusak" name="rusak" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
    <script>
        $(document).ready(function() {
            $('.btnEdit').on('click', function() {
                let id = $(this).data('id');
                let nama = $(this).data('nama');
                let merek = $(this).data('merek');
                let tipe = $(this).data('tipe');
                let jumlah = $(this).data('jumlah');
                let tahun = $(this).data('tahun');
                let penyedia = $(this).data('penyedia');
                let nomor = $(this).data('nomor');
                let keterangan = $(this).data('keterangan');
                let lokasi = $(this).data('lokasi');
                let tersedia = $(this).data('tersedia');
                let terpinjam = $(this).data('terpinjam');
                let rusak = $(this).data('rusak');

                $('#editId').val(id);
                $('#editNama').val(nama);
                $('#editMerek').val(merek);
                $('#editTipe').val(tipe);
                $('#editJumlah').val(jumlah);
                $('#editTahun').val(tahun);
                $('#editPenyedia').val(penyedia);
                $('#editNomor').val(nomor);
                $('#editKeterangan').val(keterangan);
                $('#editLokasi').val(lokasi);
                $('#editTersedia').val(tersedia);
                $('#editTerpinjam').val(terpinjam);
                $('#editRusak').val(rusak);

                $('#formEditHardware').attr('action', '/pages/stok/' + id);
            });
        });
    </script>

</body>

</html>