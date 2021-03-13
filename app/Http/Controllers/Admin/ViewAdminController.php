<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function siswa()
    {
        return view("pages.admin.siswa", ['siswa' => siswa::all(),]);
    }
    public function guru()
    {
        return view("pages.admin.guru", ['guru' => guru::all(),]);
    }
}
