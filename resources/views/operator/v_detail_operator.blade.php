@extends('layout.v_template_dashboard')

@section('title', 'Halaman Operator')
@section('side_title', 'Detail Operator')

@section('detail_operator')

    {{--  Menampilkan Form Data Detail Lokasi  --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Detail Data Operator</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                {{--  FORM NAMA LENGKAP  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $operator->nama_lengkap }}"disabled>
                    </div>
                </div>
                {{--  FORM NO HP   --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama No HP</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $operator->no_hp }}" disabled>
                    </div>
                </div>
                {{--  FORM NAMA KECAMATAN  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $operator->nama_kecamatan }}" disabled>
                    </div>
                </div>
                {{--  FORM NAMA DESA  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Desa</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="{{ $operator->nama_desa }}" disabled>
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
    <a href="/cetak_operator" class="btn btn-success tbn-sm" style="margin: 1px 0px 10px 30px; width: 150px">
        Kembali
    </a>

@endsection
