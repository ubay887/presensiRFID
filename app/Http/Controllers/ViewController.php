<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view("pages.dashboard");
    }
    public function profile()
    {
        return view("pages.profile");
    }
    public function changepass()
    {
        return view("pages.changepass");
    }
    public function anggota()
    {
        return view("pages.anggota");
    }
    public function presensi()
    {
        return view("pages.presensi");
    }
    public function ruangan()
    {
        return view("pages.ruangan");
    }
}
