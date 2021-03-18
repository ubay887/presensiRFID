<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function siswa()
    {
        return view("pages.guru.siswa");
    }
    public function datasubjek()
    {
        return view("pages.guru.datasubjek");
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
    public function harilibur()
    {
        return view("pages.guru.harilibur");
    }
    public function tagid()
    {
        return view("pages.guru.tagid");
    }
}
