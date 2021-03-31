<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportAdminController extends Controller
{
    public function allSiswa()
    {
        return view('export.siswa');
    }
}
