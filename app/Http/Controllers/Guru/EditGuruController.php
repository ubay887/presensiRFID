<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class EditGuruController extends Controller
{
    public function updateProfile(Request $request, guru $guru)
    {
        if ($request->hasFile('photo')) {
            $foto = $request->file('photo');
            $fileName = time() . '.' . $foto->getClientOriginalExtension();
            $foto_resize = Image::make($foto->getRealPath());
            $foto_resize->fit(150);

            // Check if folder not exists
            if (!File::exists(public_path('photos/guru'))) {
                // make the folder
                File::makeDirectory(public_path('photos/guru'), 0777, true, true);
            } elseif (File::exists($guru->foto)) {
                File::delete($guru->foto);
            }

            $foto_resize->save(public_path('photos/guru/' . $fileName));
            $guru->update([
                'nama' => $request->fullname,
                'username' => $request->username,
                'foto' => "photos/guru/$fileName",
                'email' => $request->email,
            ]);
        } else {
            $guru->update([
                'username' => $request->username,
                'nama' => $request->fullname,
                'email' => $request->email,
            ]);
        }
        return redirect()->back();
    }

    public function deleteProfile(guru $guru)
    {
        // Check if file exists
        if (File::exists($guru->foto)) {
            // Yes, delete the image.
            File::delete($guru->foto);
            // Check if directory is empty.
            if (empty(File::files(public_path('photos/guru/')))) {
                // Yes, delete the directory.
                File::deleteDirectory(public_path('photos/guru'));
            }
        }

        $guru->update([
            'foto' => "photos/default/no-avatar.png",
        ]);
    }

    public function updatePassword(guru $guru)
    {
        
    }
}
