@extends('layout/v_template_dashboard')

@section('title', 'Halaman Operator')
@section('side_title', 'Cetak Operator')


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
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
