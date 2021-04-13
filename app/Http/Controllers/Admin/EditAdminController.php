<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\guru;
use Illuminate\Http\Request;
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
            $foto_resize->fit(150);

            // Check if folder not exists
            if (!File::exists(public_path('photos/admin'))) {
                // make the folder
                File::makeDirectory(public_path('photos/admin'), 0777, true, true);
            } elseif (File::exists($admin->foto)) {
                File::delete($admin->foto);
            }

            $foto_resize->save(public_path('photos/admin/' . $fileName));
            $admin->update([
                'nama' => $request->fullname,
                'username' => $request->username,
                'idtelegram' => $request->idtelegram,
                'foto' => "photos/admin/$fileName",
            ]);
        } else {
            $admin->update([
                'username' => $request->username,
                'nama' => $request->fullname,
                'idtelegram' => $request->idtelegram,
            ]);
        }
        return redirect()->back();
    }

    public function deleteProfile(Admin $admin)
    {
        // Check if file exists
        if (File::exists($admin->foto)) {
            // Yes, delete the image.
            File::delete($admin->foto);
            // Check if directory is empty.
            if (empty(File::files(public_path('photos/admin/')))) {
                // Yes, delete the directory.
                File::deleteDirectory(public_path('photos/admin'));
            }
        }

        $admin->update([
            'foto' => "photos/default/no-avatar.png",
        ]);
    }

    public function updateDetailGuru(Request $request,guru $id){
        dump($request->photo);
        dd($id);
    }
}
