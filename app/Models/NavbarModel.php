<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NavbarModel extends Model
{
    public function NamaUser()
    {
        return DB::table('users')->get();
    }
}
