<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class EditAdminController extends Controller
{
    public function updateProfile(Request $request, Admin $admin)
    {
        $get = $admin->get()->first()->toArray();
        if ($request->photo) {
            // $admin->update([
            //     'nama' => $request->nama,
            //     'username' => $request->username,
            //     'idtelegram' => $request->idtelegram,
            // ]);
        } else {
            $admin->first()->update([
                'username' => $request->username,
                'nama' => $request->fullname,
                'idtelegram' => $request->idtelegram,
            ]);
        }
        return redirect()->back();
    }
}
