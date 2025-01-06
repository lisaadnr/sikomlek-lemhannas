<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventory</title>

    {{-- Sertakan Bootstrap CSS. bisa juga dengan tailwind css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-TXXkipVCjdcwqtqVMPVUQexl2rdmSnaHwv+YZ8CXZxUwUXyfoEw6lfQ4oihWxKkE" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5">
        <h1>Data Inventaris</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Merek</th>
                    <th>Tipe</th>
                    <th>Jumlah</th>
                    <th>Tahun Pengadaan</th>
                    <th>Penyedia</th>
                    <th>Lokasi</th>
                    <th>No. Kontrak</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                    <tr>
                        <td>{{ $inventory->name }}</td>
                        <td>{{ $inventory->brand }}</td>
                        <td>{{ $inventory->type }}</td>
                        <td>{{ $inventory->quantity }}</td>
                        <td>{{ $inventory->procurement_year }}</td>
                        <td>{{ $inventory->vendor->name }}</td>
                        <td>{{ $inventory->location->name }}</td>
                        <td>{{ $inventory->contract_number }}</td>
                        <td>{{ $inventory->description }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>

</body>

</html>
