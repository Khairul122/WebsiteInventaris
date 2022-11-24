<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InventarisModel extends Model
{
    // Mengambil data Inventaris dari database
    public function CetakInventarisData()
    {
        // Mengambil data dari database lokasi
        return DB::table('inventaris')->get();
    }

    //Menampilkan detail data
    public function detailInventaris($id_inventaris)
    {
        return DB::table('inventaris')->where('id_inventaris', $id_inventaris)->first();
    }

    //Menampilak All Lokasi
    public function allData()
    {
        return DB::table('inventaris')->get();
    }

    // Add Operator
    public function AddInventaris($id_inventaris)
    {
        DB::table('inventaris')->insert($id_inventaris);
    }

    //Menampilkan edit data inventaris
    public function EditInventaris($id_inventaris, $data_inventaris)
    {
        DB::table('inventaris')
            ->where('id_inventaris', $id_inventaris)
            ->update($data_inventaris);
    }

    public function DeleteInventaris($id_inventaris)
    {
        DB::table('inventaris')->where('id_inventaris', $id_inventaris)->delete();
    }
}
