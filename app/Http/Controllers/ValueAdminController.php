<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use Illuminate\Http\Request;

class ValueAdminController extends Controller
{
    public function valueDashboard(){
        $anggota = siswa::all()->count();
        $guru = guru::all()->count();
        return response()->json(compact('anggota', 'guru'));
    }
}
