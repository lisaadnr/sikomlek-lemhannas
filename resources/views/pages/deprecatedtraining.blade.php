<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pelatihan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .training-img {
            max-width: 100%;
            height: auto;
            margin-bottom: 30px;
        }

        .icon {
            margin-left: 100px;
            margin-bottom: 250px;
            float: left;
            font-size: 45px;
            color: rgb(87, 87, 87);
        }

        .icon:hover {
            color: #007bff;
        }

        .person-img {
            z-index: 2;
        }

        .header {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="header">Info Pelatihan</h1>
        <div class="row mt-5">
            <div class="col-md-8">
                <h3>Pelatihan Terdekat</h3>
                <ul class="list-group mb-4">
                    <li class="list-group-item">
                        <h4>Nama Pelatihan: <span class="fw-bold">(Isi dengan nama pelatihan)</span></h4>
                        <p>Tanggal: (Isi dengan tanggal pelaksanaan)</p>
                        <p>Tempat: (Isi dengan tempat pelaksanaan)</p>
                        <p>Waktu: (Isi dengan waktu pelaksanaan)</p>
                    </li>
                </ul>

                <h3>Pelatihan Mendatang</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        (Isi dengan informasi pelatihan yang akan datang, termasuk estimasi waktu pelaksanaan)
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="position-relative">
                    <i class="bi bi-caret-left-fill icon"></i>
                    <img src="https://via.placeholder.com/400x300" alt="Training Illustration"
                        class="training-img position-absolute person-img">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript (Optional, but needed for some features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
