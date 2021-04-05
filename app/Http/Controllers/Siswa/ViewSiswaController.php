<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\jam;
use App\Models\siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ViewSiswaController extends Controller
{
    public function dashboard()
    {
        $now = Carbon::now()->format('D');
        $user = Auth::guard('siswa')->user()->id;
        foreach (siswa::where('id', $user)->first()->idTagJam as $key) {
            if (jam::where([['id', $key->id_jam], ['harimasuk', 'LIKE', "%$now%"]])->get()->first() !== null) {
                $data = jam::where([
                    ['id', $key->id_jam],
                    ['harimasuk', 'LIKE', "%$now%"],
                ])->get()->first();
            }
        }
        $now = Carbon::now()->format('l');
        $hari_ini = Carbon::parse($data->jam_masuk)->format('H:i');
        return view("pages.siswa.dashboard", ['jam_masuk' => "$now - $hari_ini"]);
    }
    public function profile()
    {
        return view('pages.siswa.profile');
    }
    public function grafik()
    {
        return view('pages.siswa.grafik');
    }
}
