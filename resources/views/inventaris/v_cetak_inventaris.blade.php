@extends('layout/v_template_dashboard')

@section('title', 'Halaman Inventaris')
@section('side_title', 'Cetak Inventaris')


@section('cetak_inventaris')

    {{--  Button PRINT  --}}
    <p>
        <a href="/inventaris/print" class="btn btn-primary" target="_blank">PRINT TO PRINTER</a>
        <a href="/inventaris/printpdf" class="btn btn-success" target="_blank">PRINT TO PDF</a>
    </p>



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

    {{--  Membuat Tabel Cetak Data Inventaris  --}}
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Nama Kecamatan</th>
                <th>Nama Desa</th>
                <th>Tahun</th>
                <th>Kondisi</th>
                <th>Sumber Dana</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($inventaris as $DataInventaris)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $DataInventaris->nama_barang }}</td>
                    <td>{{ $DataInventaris->jumlah }}</td>
                    <td>{{ $DataInventaris->nama_kecamatan }}</td>
                    <td>{{ $DataInventaris->nama_desa }}</td>
                    <td>{{ $DataInventaris->tahun }}</td>
                    <td>{{ $DataInventaris->kondisi }}</td>
                    <td>{{ $DataInventaris->sumber_dana }}</td>
                    <td style="width:200px">
                        <a href="/inventaris/v_detail_inventaris/{{ $DataInventaris->id_inventaris }}"
                            class="btn btn-sm btn-success">Detail</a>
                        <a href="/inventaris/v_edit_inventaris/{{ $DataInventaris->id_inventaris }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#delete{{ $DataInventaris->id_inventaris }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($inventaris as $DataInventaris)
        <div class="modal fade" id="delete{{ $DataInventaris->id_inventaris }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $DataInventaris->nama_barang }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah data ini yakin ingin dihapus?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <a href="/inventaris/DeleteInventaris/{{ $DataInventaris->id_inventaris }}"
                            class="btn btn-outline-light">YES</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
