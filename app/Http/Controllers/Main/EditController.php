<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\guru;
use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function deleteSiswa(Request $request)
    {
        siswa::find($request->id)->delete();
        return redirect()->back();
    }

    public function tambahKelasSiswa(Request $request)
    {
        $guru = guru::where('nama', 'LIKE', "$request->namaGuru%")->get()->first();
        if ($guru) {
            $kelas = new kelas;
            $kelas->kelas = $request->kelas;
            $kelas->id_guru = $guru->id;
            $kelas->save();
        } else {
            dd($request->kelas);
            return redirect()->back();
        }
    }
}
