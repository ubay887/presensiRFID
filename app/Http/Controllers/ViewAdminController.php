<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use App\Models\siswa;

class ViewAdminController extends Controller
{
    public function dashboard()
    {
        return view("pages.admin.dashboard");
    }
    public function profile()
    {
        return view("pages.admin.profile");
    }
    public function anggota()
    {
        return view("pages.admin.anggota", ['siswa' => siswa::all(),]);
    }
    public function guru()
    {
        return view("pages.admin.guru", ['guru' => guru::all(),]);
    }
}
