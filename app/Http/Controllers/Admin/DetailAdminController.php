<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\siswa;

class DetailAdminController extends Controller
{
    public function siswa(siswa $ID)
    {
        return view('pages.admin.detail',['id' => $ID->first()]);
    }
}
