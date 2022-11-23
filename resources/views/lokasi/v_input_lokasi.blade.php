@extends('layout/v_template_dashboard')

@section('title', 'Halaman Lokasi')
@section('side_title', 'Input Lokasi')


@section('input_lokasi')

    <form action="/lokasi/add" method="POST" enctype="multipart/form-data" class="form-horizontal">

        @csrf

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Input Data Lokasi</h3>
            </div>

            <div class="card-body">

                {{--  FORM NAMA KECAMATAN  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <input name="nama_kecamatan" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('nama_kecamatan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  FORM NAMA DESA  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Desa</label>
                    <div class="col-sm-10">
                        <input name="nama_desa" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('nama_desa')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  Button Simpan  --}}
        <div style="padding-left: 20px; padding-top: 30px">
            <button class="btn btn-primary btn-sm" style="width: 100px">
                SIMPAN
            </button>
        </div>
    </form>

@endsection
