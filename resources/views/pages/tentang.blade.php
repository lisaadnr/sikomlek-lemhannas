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
                            <h1>Tentang Komlek</h1>
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
                                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
                                nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                                pariatur?"
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
                                            1. Lorem ipsum dolor sit amet
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            2. Aenean massa
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            3. Donec quam felis
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                        consequat massa quis enim.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-warning card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            4. Donec pede justo
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-warning card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            5. In enim justo
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                        felis eu pede mollis pretium.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-warning card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            6. Integer tincidunt
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseSix" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                        eleifend tellus.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-danger card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            7. Aenean leo ligula
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-danger card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            8. Aliquam lorem ante
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseEight" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                        viverra nulla ut metus varius laoreet.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-danger card-outline">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            9. Quisque rutrum
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapseNine" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                                        ullamcorper ultricies nisi.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <p class="lead">
                            <a href="contact-us.html">Contact us</a>,
                            if you found not the right anwser or you have a other question?<br />
                        </p>
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