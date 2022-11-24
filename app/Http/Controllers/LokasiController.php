<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LokasiModel;
use Illuminate\Support\Facades\DB;
use App\Models\InventarisModel;
use App\Models\OperatorModel;

class LokasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->LokasiModel = new LokasiModel;
    }

    // Cetak Data Lokasi
    public function CetakLokasiData()
    {
        $DataLokasi = [
            'lokasi' => $this->LokasiModel->CetakLokasiData(),
        ];
        return view('lokasi.v_cetak_lokasi', $DataLokasi);
    }

    //Menampilkan detail lokasi
    public function DetailLokasi($id_lokasi)
    {
        $DataLokasi = [
            'lokasi' => $this->LokasiModel->DetailLokasi($id_lokasi),
        ];
        return view('lokasi.v_detail_lokasi', $DataLokasi);
    }

    // Menampilkan halaman Input Operator melalui controller
    public function InputLokasi()
    {
        $DataLokasi = [
            'lokasi' => $this->LokasiModel->allData(),
        ];
        $ListLokasi = [
            'lokasi' => $this->LokasiModel->allData(),
        ];
        return view('lokasi.v_input_Lokasi', $DataLokasi, $ListLokasi);
    }

    // Add Operator
    public function AddLokasi()
    {
        // Validasi Form
        Request()->validate([
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
        ], [
            'nama_kecamatan.required' => 'Nama kecamatan belum disii !!!',
            'nama_desa.required' => 'Nama desa belum disii !!!',
        ]);

        $id_lokasi = [
            'nama_kecamatan' => Request()->nama_kecamatan,
            'nama_desa' => Request()->nama_desa,

        ];

        $this->LokasiModel->AddLokasi($id_lokasi);
        return redirect()->route('lokasi')->with('pesan', 'Data Berhasil Disimpan');
    }

    public function EditLokasi($id_lokasi)
    {
        $DataLokasi = [
            'lokasi' => $this->LokasiModel->DetailLokasi($id_lokasi),
        ];
        return view('lokasi/v_edit_lokasi', $DataLokasi);
    }

    // UpdateLokasi
    public function UpdateLokasi($id_lokasi)
    {
        Request()->validate([
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
        ], [
            'nama_kecamatan.required' => 'Nama kecamatan belum disii !!!',
            'nama_desa.required' => 'Nama desa belum disii !!!',
        ]);

        $data_lokasi = [
            'nama_kecamatan' => Request()->nama_kecamatan,
            'nama_desa' => Request()->nama_desa,

        ];

        $this->LokasiModel->EditLokasi($id_lokasi, $data_lokasi);
        return redirect()->route('lokasi')->with('pesan', 'Data Berhasil Di Update');
    }

    // Fungsi menghapus data
    public function delete($id_lokasi)
    {
        $this->LokasiModel->DeleteLokasi($id_lokasi);
        return redirect()->route('lokasi')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
