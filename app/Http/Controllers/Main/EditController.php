<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\siswa;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function deleteSiswa(Request $request){
        siswa::find($request->id)->delete();
        return redirect()->back();
    }
}
