@extends('layout.v_template_dashboard')

@section('title', 'Halaman Inventaris')
@section('side_title', 'Detail Inventaris')

@section('detail_inventaris')

    {{--  Menampilkan Form Data Detail Inventaris  --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Detail Data Lokasi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                {{--  FORM NAMA BARANG  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->nama_barang }}"disabled>
                    </div>
                </div>
                {{--  FORM NAMA JUMLAH  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->jumlah }}" disabled>
                    </div>
                </div>
                {{--  FORM NAMA KECAMATAN  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->nama_kecamatan }}" disabled>
                    </div>
                </div>
                {{--  FORM NAMA DESA  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Desa</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->nama_desa }}" disabled>
                    </div>
                </div>
                {{--  FORM TAHUN  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->tahun }}" disabled>
                    </div>
                </div>
                {{--  FORM KONDISI  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->kondisi }}" disabled>
                    </div>
                </div>
                {{--  FORM SUMBER DANA  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sumber Dana</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $inventaris->sumber_dana }}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <a href="/cetak_inventaris" class="btn btn-success tbn-sm" style="margin: 1px 0px 10px 30px; width: 150px">
        Kembali
    </a>

@endsection
