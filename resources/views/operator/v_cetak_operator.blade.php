@extends('layout/v_template_dashboard')

@section('title', 'Halaman Penerima')
@section('side_title', 'Cetak Penerima')


@section('cetak_lokasi')

    {{--  Membuat Notifikasi  --}}
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
                <th>Nama Lengakp</th>
                <th>No Hp</th>
                <th>Nama Kecamatan</th>
                <th>Nama Lokasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($operator as $DataOperator)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $DataOperator->nama_lengkap }}</td>
                    <td>{{ $DataOperator->no_hp }}</td>
                    <td>{{ $DataOperator->nama_kecamatan }}</td>
                    <td>{{ $DataOperator->nama_desa }}</td>
                    <td>
                        <a href="/operator/v_detail_operator/{{ $DataOperator->id_operator }}"
                            class="btn btn-sm btn-success">Detail</a>
                        <a href="/operator/v_edit_operator/{{ $DataOperator->id_operator }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#delete{{ $DataOperator->id_operator }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($operator as $DataOperator)
        <div class="modal fade" id="delete{{ $DataOperator->id_operator }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $DataOperator->nama_lengkap }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah data ini yakin ingin dihapus?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <a href="/operator/DeleteOperator/{{ $DataOperator->id_operator }}"
                            class="btn btn-outline-light">YES</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
