<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\siswa;

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
    public function presensi()
    {
        return view("pages.guru.presensi");
    }
    public function rekap()
    {
        return view("pages.guru.rekapdata");
    }
    public function grafik()
    {
        return view("pages.guru.grafik");
    }
    public function jammasuk()
    {
        return view("pages.guru.jammasuk");
    }
    public function tambahjam()
    {
        return view("pages.guru.tambahjam");
    }
    public function harilibur()
    {
        return view("pages.guru.harilibur");
    }
    public function tagid()
    {
        return view("pages.guru.tagid");
    }
}
