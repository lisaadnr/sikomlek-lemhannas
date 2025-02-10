<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:wght@400&display=swap" />
    @vite(['resources/css/app.css'])
    <!-- Title -->
    <title>Login | SiKomLek</title>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <section class="container-fluid text-center">
        <div class="row min-vh-100">
            <!-- Gambar Samping -->
            <div class="col-md-6 p-0 image-container">
                <img class="img-fluid" alt="illustration" src="{{ asset('img/bg1.png') }}">
            </div>
            <!-- Grup Konten Utama -->
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center text-center p-4">
                <img class="logo-img img-fluid mb-3" alt="logo" src="{{ asset('img/logo.png') }}">
                <h1 class="fw-bold text-black">Sistem Informasi</h1>
                <h2 class="fw-semibold text-secondary">Komunikasi dan Elektronika</h2>
                
                <!-- Form Login -->
                <div class="w-75 mt-4">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method ="POST" action="{{ route('login') }}">
                    @csrf
                        <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
                        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                        <button type="submit" class="btn btn-outline-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>