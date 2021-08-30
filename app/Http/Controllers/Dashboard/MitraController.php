<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mitra;
use Alert;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function getMitra()
    {
        $mitras = Mitra::orderBy('created_at','desc')->get();
        return view('dashboard.mitra',compact(['mitras']));
    }

    public function postMitra(Request $request)
    {
        $request->validate([
            'gambar'=>'required|image|mimes:png,jpg'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'mitra';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Mitra::create([
            'gambar'=>$nama_gambar
        ]);
        Alert::success("Sukses","Berhasil menambah data");
        return back();
    }

    public function deleteMitra($id)
    {
        $mitra = Mitra::find($id);
        $mitra->delete();
        return back();
    }
}
