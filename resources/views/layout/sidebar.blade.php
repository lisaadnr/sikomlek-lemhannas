<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <ul class="navbar-nav ml-auto">
            <!-- User Profile -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button">
                    <i class="fas fa-user"></i>
                    <span class="ml-2">Selamat datang,
                        @auth
                            {{ Auth::user()->username }}
                        @else
                            user
                        @endauth
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </ul>

    </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link logo-switch">
        <img src="" alt="Logo atau Tulisan">
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">DASHBOARD</li>
                    <li class="nav-item">
                        <a href="{{ route('pages.dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i> <!-- Dashboard icon -->
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <!-- Sidebar Menu -->
                    @if(Auth::check())
                        <!-- MANAJEMEN Section -->
                        <li class="nav-header">MANAJEMEN</li>

                        <li class="nav-item">
                            <a href="{{ route('stok.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-microchip"></i>
                                <p>Stok Hardware</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                                <a href="{{ route('pages.pinjamalat') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tools"></i>
                                    <p>Peminjaman Alat</p>
                                </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.inventory') }}" class="nav-link">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>Persediaan Gudang</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.informasialat') }}" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>Informasi Alat</p>
                            </a>
                        </li>
                        <!-- PENGATURAN Section -->
                        <li class="nav-header">PENGATURAN</li>

                        <li class="nav-item">
                            <a href="{{ route('pages.pengaturanakun') }}" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Pengaturan Akun</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.hakakses') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>Peran dan Hak Akses</p>
                            </a>
                        </li>

                        <!-- Jika user belum login, tampilkan menu login dan register -->
                        <li class="nav-header">LAINNYA</li>
                        <li class="nav-item">
                            <a href="{{ route('pages.pelatihan') }}" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>Info Pelatihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.tentang') }}" class="nav-link">
                                <i class="nav-icon fas fa-info"></i>
                                <p>Tentang SiKomLek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-door-open"></i>
                                <p>Logout</p>         
                            </a>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-header">MANAJEMEN</li>
                        <li class="nav-item">
                            <a href="{{ route('pages.pinjamalat') }}" class="nav-link">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>Peminjaman Alat</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.inventory') }}" class="nav-link">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>Persediaan Gudang</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.informasialat') }}" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>Informasi Alat</p>
                            </a>
                        </li>
                        <!-- Jika user belum login, tampilkan menu login dan register -->
                        <li class="nav-header">LAINNYA</li>
                        <li class="nav-item">
                            <a href="{{ route('pages.pelatihan') }}" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>Info Pelatihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.tentang') }}" class="nav-link">
                                <i class="nav-icon fas fa-info"></i>
                                <p>Tentang SiKomLek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="nav-icon fas fa-sign-in-alt"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Register</p>
                            </a>
                        </li>
                    @endif       
                </li>
            </ul>
        </nav>
    </div>
  </aside>