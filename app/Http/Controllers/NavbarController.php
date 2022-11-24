<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavbarModel;

class NavbarController extends Controller
{
    public function NamaUser()
    {
        $DataUser = [
            'users' => $this->NavbarModel->NamaUser(),
        ];
        return view('layout.v_navbar', $DataUser);
    }

    public function __construct()
    {
        $this->NavbarModel = new NavbarModel;
    }
}
