<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Inventaris</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i></i> LAPORAN INVENTARIS
                        <small class="float-right">Tanggal {{ date('d-M-Y') }}</small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="padding:20px 20px 20px 20px">No</th>
                                <th style="padding:20px 20px 20px 20px">Nama Barang</th>
                                <th style="padding:20px 20px 20px 20px">Jumlah</th>
                                <th style="padding:20px 20px 20px 20px">Nama Kecamatan</th>
                                <th style="padding:20px 20px 20px 20px">Nama Desa</th>
                                <th style="padding:20px 20px 20px 20px">Tahun</th>
                                <th style="padding:20px 20px 20px 20px">Kondisi</th>
                                <th style="padding:5px 5px 5px 5px">Sumber Dana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($inventaris as $DataInventaris)
                                <tr>
                                    <td style="padding:10px 10px 10px 10px">{{ $no++ }}</td>
                                    <td>{{ $DataInventaris->nama_barang }}</td>
                                    <td style="padding:40px 40px 40px 40px">{{ $DataInventaris->jumlah }}</td>
                                    <td style="padding:30px 30px 30px 30px">{{ $DataInventaris->nama_kecamatan }}</td>
                                    <td style="padding:30px 30px 30px 30px">{{ $DataInventaris->nama_desa }}</td>
                                    <td style="padding:30px 30px 30px 30px">{{ $DataInventaris->tahun }}</td>
                                    <td style="padding:60px 60px 60px 60px">{{ $DataInventaris->kondisi }}</td>
                                    <td style="padding:10px 10px 10px 10px">{{ $DataInventaris->sumber_dana }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    {{--  <script>
        window.addEventListener("load", window.print());
    </script>  --}}
</body>

</html>
