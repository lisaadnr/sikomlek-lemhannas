<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error</title>
    @vite(['resources/css/style.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="custom-bg">
        <div class="d-flex align-items-center justify-content-center min-vh-100 px-2">
            <div class="text-center text-white animate-fade-in">
                <h1 class="display-1 fw-bold error-title mb-4">404</h1>
                <p class="fs-2 fw-medium mb-3">Ups! Halaman tidak ditemukan</p>
                <p class="mb-5">Halaman yang anda cari tidak ada atau sudah dipindahkan</p>
                <a href="{{ route('pages.dashboard') }}" class="btn  btn-outline-light custom-btn fw-semibold rounded-pill px-4 py-2">
                    Ke Dashboard
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>