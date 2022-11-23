@extends('layout/v_template_dashboard')

@section('title', 'Halaman Lokasi')
@section('side_title', 'Cetak Lokasi')


@section('cetak_lokasi')

    {{--  Membuat Notifiksi  --}}
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4><i class=" icon fa fa-check"></i>Berhasil</h4>
            {{ session('pesan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{--  Membuat Tabel Cetak Data Lokasi  --}}
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Nama Lokasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($lokasi as $DataLokasi)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $DataLokasi->nama_kecamatan }}</td>
                    <td>{{ $DataLokasi->nama_desa }}</td>
                    <td>
                        <a href="/lokasi/v_detail_lokasi/{{ $DataLokasi->id_lokasi }}"
                            class="btn btn-sm btn-success">Detail</a>
                        <a href="/lokasi/v_edit_lokasi/{{ $DataLokasi->id_lokasi }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
