<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OperatorModel;
use App\Models\LokasiModel;
use Illuminate\Support\Facades\DB;
use App\Models\InventarisModel;

class OperatorController extends Controller
{
    //Menampilkan allData

    // Menampilkan Data Operator
    public function __construct()
    {
        $this->middleware('auth');
        $this->OperatorModel = new OperatorModel;
    }

    // Menampilkan halaman Input Operator melalui controller
    public function InputOperator()
    {
        $DataOperator = [
            'operator' => $this->OperatorModel->allData(),
        ];
        $ListLokasi = [
            'lokasi' => $this->OperatorModel->allData(),
        ];
        return view('operator.v_input_operator', $DataOperator, $ListLokasi);
    }

    // Menampilkan halaman Cetak Lokasi melalui controller
    public function CetakOperator()
    {
        $DataOperator = [
            'operator' => $this->OperatorModel->CetakOperatorData(),
        ];
        return view('operator.v_cetak_operator', $DataOperator);
    }

    //Menampilkan detail operator
    public function detailOperator($id_operator)
    {
        $DataOperator = [
            'operator' => $this->OperatorModel->detailOperator($id_operator),
        ];
        return view('operator/v_detail_operator', $DataOperator);
    }

    // Add Operator
    public function AddOperator()
    {
        // Validasi Form
        Request()->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
        ], [
            'nama_lengkap.required' => 'Nama lengkap belum disii !!!',
            'no_hp.required' => 'No HP belum disii !!!',
            'nama_kecamatan.required' => 'Nama kecamatan belum disii !!!',
            'nama_desa.required' => 'Nama desa belum disii !!!',
        ]);

        $id_operator = [
            'nama_lengkap' => Request()->nama_lengkap,
            'no_hp' => Request()->no_hp,
            'nama_kecamatan' => Request()->nama_kecamatan,
            'nama_desa' => Request()->nama_desa,

        ];

        $this->OperatorModel->AddOperator($id_operator);
        return redirect()->route('operator')->with('pesan', 'Data Berhasil Disimpan');
    }

    // Menampilkan Data Edit Operator
    public function EditOperator($id_operator)
    {
        $DataOperator = [
            'operator' => $this->OperatorModel->DetailOperator($id_operator),
        ];
        $ListLokasi = [
            'lokasi' => $this->OperatorModel->allData(),
        ];
        return view('operator.v_edit_operator', $DataOperator, $ListLokasi);
    }

    // Update Data Opeator
    public function UpdateOperator($id_operator)
    {
        Request()->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
        ], [
            'nama_lengkap.required' => 'Nama lengkap belum disii !!!',
            'no_hp.required' => 'No HP belum disii !!!',
            'nama_kecamatan.required' => 'Nama kecamatan belum disii !!!',
            'nama_desa.required' => 'Nama desa belum disii !!!',
        ]);

        // $ListLokasi = [
        //     'lokasi' => $this->OperatorModel->allData(),
        // ];

        $data_operator = [
            'nama_lengkap' => Request()->nama_lengkap,
            'no_hp' => Request()->no_hp,
            'nama_kecamatan' => Request()->nama_kecamatan,
            'nama_desa' => Request()->nama_desa,

        ];

        $this->OperatorModel->EditOperator($id_operator, $data_operator);
        return redirect()->route('operator')->with('pesan', 'Data Berhasil Di Update');
    }

    public function delete($id_operator)
    {
        $this->OperatorModel->DeleteOperator($id_operator);
        return redirect()->route('operator')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
