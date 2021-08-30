<?php

namespace App\Http\Controllers\Dashboard;

use App\Galeri;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    public function getGaleri()
    {
        $galeris = Galeri::orderBy('created_at')->get();
        return view('dashboard.galeri',compact(['galeris']));
    }

    public function postGaleri(Request $request)
    {
        $request->validate([
            'gambar'=>'required|image|mimes:png,jpg'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'galeri';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Galeri::create([
            'gambar'=>$nama_gambar
        ]);
        Alert::success("Sukses","Berhasil menambah data");
        return back();
    }

    public function deleteGaleri($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return back();
    }
}
