<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\File;
use Image;

class EditAdminController extends Controller
{
    public function updateProfile(Request $request, Admin $admin)
    {
        if ($request->hasFile('photo')) {
            $foto = $request->file('photo');
            $fileName = time() . '.' . $foto->getClientOriginalExtension();
            $foto_resize = Image::make($foto->getRealPath());
            // nyalain buat menghemat driver
            // $foto_resize->resize(760, 480, function ($constraint) { 
            //     $constraint->aspectRatio();
            // });
            $foto_resize->fit(150);
            $foto_resize->save(public_path('photos/admin/' . $fileName));
            if (File::exists($admin->first()->foto) && $admin->first()->foto !== "photos/default/no-avatar.png") {
                File::delete($admin->first()->foto);
            }
            $admin->first()->update([
                'nama' => $request->fullname,
                'username' => $request->username,
                'idtelegram' => $request->idtelegram,
                'foto' => "photos/admin/$fileName",
            ]);
        } else {
            $admin->first()->update([
                'username' => $request->username,
                'nama' => $request->fullname,
                'idtelegram' => $request->idtelegram,
            ]);
        }
        return redirect()->back();
    }
    public function deleteProfile(Request $request, Admin $admin)
    {
        if (File::exists($admin->first()->foto) && $admin->first()->foto !== "photos/default/no-avatar.png") {
            File::delete($admin->first()->foto);
        }

        $admin->first()->update([
            'foto' => "photos/default/no-avatar.png",
        ]);
    }
}
