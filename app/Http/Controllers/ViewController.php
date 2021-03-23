<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function profile()
    {
        return view('pages.siswa.profile');
    }
    public function grafik()
    {
        return view('pages.siswa.grafik');
    }
    public function presensi()
    {
        return view('pages.siswa.presensi');
    }
}
