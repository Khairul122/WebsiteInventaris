<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="https://distanbun.acehprov.go.id/" class="brand-link">
            <img src="{{ asset('gambar') }}/logo aceh.png" alt="Logo Dinas" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">DINAS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('gambar') }}/admin.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">USER</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                        <a href="/dashboard" class="nav-link">
                            <i></i>
                            <p>
                                Dashboard
                                <i></i>
                            </p>
                        </a>
                    </li>

                    {{--  Menu Bar Operator  --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i></i>
                            <p>
                                Operator
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/input_operator" class="nav-link">
                                    <i></i>
                                    <p>Input Data Opeator</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cetak_operator" class="nav-link">
                                    <i></i>
                                    <p>Cetak Data Operator</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--  Menu Bar Lokasi  --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i></i>
                            <p>
                                Lokasi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/input_lokasi" class="nav-link">
                                    <i></i>
                                    <p>Input Data Lokasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cetak_lokasi" class="nav-link">
                                    <i></i>
                                    <p>Cetak Data Lokasi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--  Master Bar Inventaris  --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i></i>
                            <p>
                                Inventaris
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/input_inventaris" class="nav-link">
                                    <i></i>
                                    <p>Input Data Inventaris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cetak_inventaris" class="nav-link">
                                    <i></i>
                                    <p>Cetak Data Inventaris</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--  Menu Bar Cetak Laporan  --}}
                    <li class="nav-item">
                        <a href="/cetak_data" class="nav-link">
                            <i></i>
                            <p>
                                Cetak Laporan
                                <i></i>
                            </p>
                        </a>
                    </li>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>