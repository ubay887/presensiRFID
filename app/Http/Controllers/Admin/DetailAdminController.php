<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\siswa;

class DetailAdminController extends Controller
{
    public function anggota(siswa $id)
    {
        return view('pages.admin.detail',compact('id'));
    }
}
