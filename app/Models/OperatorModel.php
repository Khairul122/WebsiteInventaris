<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OperatorModel extends Model
{
    // Mengambil data Operator dari database
    public function CetakOperatorData()
    {
        // Mengambil data dari database lokasi
        return DB::table('operator')->get();
    }

    //Menampilkan detail data Operator
    public function detailOperator($id_operator)
    {
        return DB::table('operator')->where('id_operator', $id_operator)->first();
    }

    //Menampilak List Lokasi
    // public function allDataLokasi()
    // {
    //     return DB::table('lokasi')->get();
    // }

    // Menampilkan DAta Operator
    public function allData()
    {
        return DB::table('lokasi')->get();
    }

    // Add Operator
    public function AddOperator($id_operator)
    {
        DB::table('operator')->insert($id_operator);
    }

    //Menampilkan edit data operator
    public function EditOperator($id_operator, $data_operator)
    {
        DB::table('operator')
            ->where('id_operator', $id_operator)
            ->update($data_operator);
    }
    public function DeleteOperator($id_operator)
    {
        DB::table('operator')->where('id_operator', $id_operator)->delete();
    }
}
