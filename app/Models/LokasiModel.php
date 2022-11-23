<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LokasiModel extends Model
{
    // Mengambil data Lokasi dari database
    public function CetakLokasiData()
    {
        // Mengambil data dari database lokasi
        return DB::table('lokasi')->get();
    }

    //Menampilkan detail data Lokasi
    public function DetailLokasi($id_lokasi)
    {
        return DB::table('lokasi')->where('id_lokasi', $id_lokasi)->first();
    }

    //Menampilak List Lokasi
    public function allDataLokasi()
    {
        return DB::table('lokasi')->get();
    }

    // Menampilkan DAta Operator
    public function allData()
    {
        return DB::table('lokasi')->get();
    }

    public function AddLokasi($id_lokasi)
    {
        DB::table('lokasi')->insert($id_lokasi);
    }

    //Menampilkan detail data Lokasi
    public function EditLokasi($id_lokasi, $data_lokasi)
    {
        DB::table('lokasi')
            ->where('id_lokasi', $id_lokasi)
            ->update($data_lokasi);
    }
}
