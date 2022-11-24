<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    {{--  NAVBAR  --}}
    @include('layout/v_navbar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            @yield('title')
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a>@yield('side_title')</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
                <!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        {{--  Navigasi Halaman Dashboard  --}}
        @yield('dashboard')

        {{--  Navigasi Halaman Input Lokasi  --}}
        @yield('input_lokasi')

        {{--  Navigasi Halaman Cetak Lokasi  --}}
        @yield('cetak_lokasi')

        {{--  Navigasi Halaman Input Operator  --}}
        @yield('input_operator')

        {{--  Navigasi Halaman Cetak Operator  --}}
        @yield('cetak_operator')

        {{--  Navigasi Halaman Input Inventaris  --}}
        @yield('input_inventaris')

        {{--  Navigasi Halaman Cetak Inventaris  --}}
        @yield('cetak_inventaris')

        {{--  Navigasi Halaman Detail Lokasi  --}}
        @yield('detail_lokasi')

        {{--  Navigasi Halaman Detail Operator  --}}
        @yield('detail_operator')

        {{--  Navigasi Halaman Detail Operator  --}}
        @yield('detail_inventaris')

        {{--  Navigasi Halaman Edit Lokasi  --}}
        @yield('edit_lokasi')

        {{--  Navigasi Halaman Edit Operator  --}}
        @yield('edit_operator')

        {{--  Navigasi Halaman Edit Inventaris  --}}
        @yield('edit_inventaris')





    </div>
    <!-- /.content-wrapper -->

    {{--  FOOTER  --}}

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template') }}/dist/js/demo.js"></script>
</body>

</html>
