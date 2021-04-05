<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\jam;
use App\Models\tagjam;

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
    public function jamMasuk()
    {
        return view("pages.guru.jam", ['tagjam' => tagjam::all(), 'jam' => jam::all()]);
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
