<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\guru;
use App\Models\kelas;
use App\Models\siswa;

class ViewController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function calendar()
    {
        return view("pages.calendar");
    }

    // view siswa oleh admin dan guru
    public function tableSiswa()
    {
        return view("pages.siswa.table", ['siswa' => siswa::all()]);
    }
    public function detailSiswa(siswa $ID)
    {
        return view('pages.siswa.detail', ['id' => $ID->first()]);
    }
    public function tambahSiswa()
    {
        return view("pages.siswa.tambah", ['kelas' => kelas::get('kelas')]);
    }
    public function recordSiswa(siswa $siswa)
    {
        return view("pages.siswa.record", ['personal' => $siswa->first()]);
    }
    public function kelasSiswa()
    {
        return view("pages.siswa.kelas", ['kelas' => kelas::all(), 'guru' => guru::all()]);
    }
}
