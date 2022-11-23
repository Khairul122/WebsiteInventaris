<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventarisModel;
use App\Models\LokasiModel;
use Illuminate\Support\Facades\DB;
use App\Models\OperatorModel;

class InventarisController extends Controller
{
    // Menampilkan Data Inventaris
    public function __construct()
    {
        $this->InventarisModel = new InventarisModel;
    }

    // Menampilkan halaman Input Inventaris melalui controller
    public function InputInventaris()
    {
        $DataInventaris = [
            'inventaris' => $this->InventarisModel->allData(),
        ];
        $ListLokasi = [
            'lokasi' => $this->InventarisModel->allData(),
        ];
        return view('inventaris.v_input_inventaris', $DataInventaris, $ListLokasi);
    }

    // Menampilkan halaman Cetak Inventaris melalui controller
    public function CetakInventaris()
    {
        $DataInventaris = [
            'inventaris' => $this->InventarisModel->CetakInventarisData(),
        ];
        return view('inventaris.v_cetak_inventaris', $DataInventaris);
    }

    //Menampilkan detail Inventaris
    public function detailInventaris($id_inventaris)
    {
        $DataInventaris = [
            'inventaris' => $this->InventarisModel->detailInventaris($id_inventaris),
        ];
        return view('inventaris.v_detail_inventaris', $DataInventaris);
    }

    // Add Inventaris
    public function AddInventaris()
    {
        // Validasi Form
        Request()->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
            'tahun' => 'required',
            'kondisi' => 'required',
            'sumber_dana' => 'required',
        ], [
            'nama_barang.required' => 'Nama barang belum disii !!!',
            'jumlah.required' => 'Jumlah belum disii !!!',
            'nama_kecamatan.required' => 'Nama kecamatan belum disii !!!',
            'nama_desa.required' => 'Nama desa belum disii !!!',
            'tahun.required' => 'Tahun belum disii !!!',
            'kondisi.required' => 'Kondisi belum disii !!!',
            'sumber_dana.required' => 'Sumber dana belum disii !!!',
        ]);

        $id_inventaris = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'nama_kecamatan' => Request()->nama_kecamatan,
            'nama_desa' => Request()->nama_desa,
            'tahun' => Request()->tahun,
            'kondisi' => Request()->kondisi,
            'sumber_dana' => Request()->sumber_dana,

        ];

        $this->InventarisModel->AddInventaris($id_inventaris);
        return redirect()->route('inventaris')->with('pesan', 'Data Berhasil Disimpan');
    }

    public function EditInventaris($id_inventaris)
    {
        $DataInventaris = [
            'inventaris' => $this->InventarisModel->DetailInventaris($id_inventaris),
        ];
        $ListLokasi = [
            'lokasi' => $this->InventarisModel->allData(),
        ];
        return view('inventaris.v_edit_inventaris', $DataInventaris, $ListLokasi);
    }

    public function UpdateInventaris($id_inventaris)
    {
        // Validasi Form
        Request()->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
            'tahun' => 'required',
            'kondisi' => 'required',
            'sumber_dana' => 'required',
        ], [
            'nama_barang.required' => 'Nama barang belum disii !!!',
            'jumlah.required' => 'Jumlah belum disii !!!',
            'nama_kecamatan.required' => 'Nama kecamatan belum disii !!!',
            'nama_desa.required' => 'Nama desa belum disii !!!',
            'tahun.required' => 'Tahun belum disii !!!',
            'kondisi.required' => 'Kondisi belum disii !!!',
            'sumber_dana.required' => 'Sumber dana belum disii !!!',
        ]);

        $data_inventaris = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'nama_kecamatan' => Request()->nama_kecamatan,
            'nama_desa' => Request()->nama_desa,
            'tahun' => Request()->tahun,
            'kondisi' => Request()->kondisi,
            'sumber_dana' => Request()->sumber_dana,

        ];

        $this->InventarisModel->EditInventaris($id_inventaris, $data_inventaris);
        return redirect()->route('inventaris')->with('pesan', 'Data Berhasil Disimpan');
    }

    public function delete($id_inventaris)
    {
        $this->InventarisModel->DeleteInventaris($id_inventaris);
        return redirect()->route('inventaris')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
