<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewGuruController extends Controller
{
    public function dashboard()
    {
        return view("pages.guru.dashboard");
    }
    public function profile()
    {
        return view("pages.guru.profile");
    }
    public function changepass()
    {
        return view("pages.guru.changepass");
    }
    public function anggota()
    {
        return view("pages.guru.anggota");
    }
    public function presensi()
    {
        return view("pages.guru.presensi");
    }
    public function ruangan()
    {
        return view("pages.guru.ruangan");
    }
    public function grafik()
    {
        return view("pages.guru.grafik");
    }
    public function jammasuk()
    {
        return view("pages.guru.jammasuk");
    }
}
