<?php

namespace App\Http\Controllers\Admin;

use App\Models\guru;
use App\Models\siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValueAdminController extends Controller
{
    public function valueDashboard(Request $request){
        if ($request->ajax()) {
            $anggota = siswa::all()->count();
            $guru = guru::all()->count();
            return response()->json(compact('anggota', 'guru'));
        }
        return redirect()->back();
    }
}
