<?php

namespace App\Http\Controllers;

use App\Models\kehadiran;
use App\Models\ruangan;
use App\Models\siswa;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function dashboardValue()
    {
        $date = now()->format('Y-m-d');

        $anggota = siswa::all()->count();
        $ruangan = ruangan::all()->count();
        $hadir = kehadiran::where('TANGGAL', '=', $date)->where('ket', '=', 'HADIR')->count();
        $tidakhadir = kehadiran::where('TANGGAL', '=', $date)
            ->where(function ($query) {
                $query->where('ket', '=', 'alfa')
                    ->orWhere('ket', '=', 'sakit')
                    ->orWhere('ket', '=', 'izin');
            })->count();
        $terlambat = kehadiran::where('TANGGAL', '=', $date)->whereTime('CHECK_IN', '>', 'JAM_MASUK')
            ->Where('CHECK_IN', '!=', 'empty')->count();

        $izin_pulang = kehadiran::where('TANGGAL', '=', $date)->whereTime('CHECK_OUT', '<', 'JAM_MASUK')
            ->Where('CHECK_OUT', '!=', 'empty')->count();

        $total_checkout = kehadiran::where('TANGGAL', '=', $date)->whereTime('CHECK_OUT', '!=', '')
            ->Where('CHECK_OUT', '!=', 'empty')->count();
        $total_checkin = $hadir - $total_checkout;
        return response()->json(compact('anggota', 'ruangan', 'hadir', 'tidakhadir', 'terlambat', 'izin_pulang','total_checkin','total_checkout'));
    }
}
