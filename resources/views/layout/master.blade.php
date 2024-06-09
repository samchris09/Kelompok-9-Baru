<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>AdminLTE 3 | Dashboard 2</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
        href=https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{
            asset("template/plugins/fontawesome-free/css/all.min.css")
        }}" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{
            asset("template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")
        }}"/>
        <!-- Theme style -->
        <link rel="stylesheet" href="{{
            asset("template/dist/css/adminlte.min.css")
        }}"/>
        @stack('css')
    </head>
    <body
        class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"
    >
    @include('sweetalert::alert')
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="pushmenu"
                            href="#"
                            role="button"
                            ><i class="fas fa-bars"></i
                        ></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="navbar-search"
                            href="#"
                            role="button"
                        >
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input
                                        class="form-control form-control-navbar"
                                        type="search"
                                        placeholder="Search"
                                        aria-label="Search"
                                    />
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn-navbar"
                                            type="submit"
                                        >
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button
                                            class="btn btn-navbar"
                                            type="button"
                                            data-widget="navbar-search"
                                        >
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Messages Dropdown Menu -->
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img
                        src="{{asset("template/dist/img/AdminLTELogo.png")}}"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: 0.8"
                    />
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img
                                src="{{asset('template/dist/img/user2-160x160.jpg')}}"
                                class="img-circle elevation-2"
                                alt="User Image"
                            />
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{Auth::user()->name}}</a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input
                                class="form-control form-control-sidebar"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                            />
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false"
                        >
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="/" class="nav-link active">
                    <i class="right fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                            <li class="nav-item">
                                <a href="/mobil" class="nav-link active">
                                    <i class="right fas fa-car"></i>
                                    <p>
                                        Mobil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/type_mobil" class="nav-link active">
                                    <i class="right fas fa-grip-horizontal"></i>
                                    <p>
                                        Tipe Mobil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan" class="nav-link active">
                                    <i class="right fas fa-clipboard-list"></i>
                                    <p>
                                        Rental
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/logout" class="nav-link active">
                                    <i class="right fas fa-sign-out-alt"></i>
                                    <p>
                                        Log Out
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('title')</h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Dashboard v2
                                    </li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <!--/. container-fluid -->
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <strong
                    >Rental Mobil &copy; 2023</strong>
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.2.0
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('template/dist/js/adminlte.js')}}"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="{{asset('template')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="{{asset('template')}}/plugins/raphael/raphael.min.js"></script>
        <script src="{{asset('template')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="{{asset('template')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <!-- ChartJS -->
        <script src="{{asset('template')}}/plugins/chart.js/Chart.min.js"></script>

        <!-- AdminLTE for demo purposes -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('template')}}/dist/js/pages/dashboard2.js"></script>
        @stack('js')
    </body>
</html>
