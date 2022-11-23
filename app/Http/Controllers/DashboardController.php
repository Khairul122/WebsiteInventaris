<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan halaman dashboard melalui controller
    public function dashboard()
    {
        return view('dashboard.v_dashboard');
    }
}
