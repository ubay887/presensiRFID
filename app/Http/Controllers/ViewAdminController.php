<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view("pages.admin.anggota");
    }
}
