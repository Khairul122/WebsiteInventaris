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
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#delete{{ $DataLokasi->id_lokasi }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($lokasi as $DataLokasi)
        <div class="modal fade" id="delete{{ $DataLokasi->id_lokasi }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $DataLokasi->nama_kecamatan }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah data ini yakin ingin dihapus?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <a href="/lokasi/DeleteLokasi/{{ $DataLokasi->id_lokasi }}" class="btn btn-outline-light">YES</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
