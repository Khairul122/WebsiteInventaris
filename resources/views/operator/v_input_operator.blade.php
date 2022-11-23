@extends('layout/v_template_dashboard')

@section('title', 'Halaman Operator')
@section('side_title', 'Input Operator')


@section('input_operator')

    <form action="/operator/add" method="POST" enctype="multipart/form-data" class="form-horizontal">

        @csrf

        <div class="card card-info">
            <div class="card-header">

                <h3 class="card-title">Input Data Operator</h3>
            </div>

            <div class="card-body">

                {{--  FORM NAMA LENGKAP  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input name="nama_lengkap" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('nama_lengkap')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  FORM NO HP  --}}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input name="no_hp" class="form-control" placeholder="">
                        <div class=" text-danger">
                            @error('no_hp')
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
