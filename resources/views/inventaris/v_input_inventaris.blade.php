@extends('layout/v_template_dashboard')

@section('title', 'Halaman Inventaris')
@section('side_title', 'Input Inventaris')


@section('input_inventaris')

    <form action="/inventaris/add" method="POST" enctype="multipart/form-data" class="form-horizontal">

        @csrf

        <div class="card card-info">
            <div class="card-header">

                <h3 class="card-title">Input Data Inventaris</h3>
            </div>

            <div class="card-body">

                {{--  FORM NAMA BARANG  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input name="nama_barang" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('nama_barang')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  FORM JUMLAH  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input name="jumlah" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('jumlah')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  FORM NAMA KECAMATAN  --}}
                <p>
                <div class="row">
                    <label class="col-sm-2 ">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="nama_kecamatan">
                            <option>-- Pilih Nama Kecamatan -- </option>
                            @foreach ($lokasi as $data)
                                <option value="{{ $data->nama_kecamatan }}">{{ $data->nama_kecamatan }}</option>
                            @endforeach
                            <div class=" text-danger">
                                @error('nama_kecamatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </select>
                    </div>
                </div>
                </p>

                {{--  FORM NAMA DESA  --}}
                <p>
                <div class="row">
                    <label class="col-sm-2 ">Nama Desa</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="nama_desa">
                            <option>-- Pilih Nama Desa -- </option>
                            @foreach ($lokasi as $data)
                                <option value="{{ $data->nama_desa }}">{{ $data->nama_desa }}</option>
                            @endforeach
                            <div class=" text-danger">
                                @error('nama_desa')
                                    {{ $message }}
                                @enderror
                            </div>
                        </select>
                    </div>
                </div>
                </p>

                {{--  FORM Tahun  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input name="tahun" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('tahun')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  FORM KONDISI  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                        <input name="kondisi" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('kondisi')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  FORM JUMLAH  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sumber Dana</label>
                    <div class="col-sm-10">
                        <input name="sumber_dana" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('sumber_dana')
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
