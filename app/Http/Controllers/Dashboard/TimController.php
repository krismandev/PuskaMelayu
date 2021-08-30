<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tim;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TimController extends Controller
{
    public function getTim()
    {
        $tims = Tim::orderBy('nama','asc')->get();
        return view('dashboard.tim',compact(['tims']));
    }

    public function postTIm(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'tim';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Tim::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'gambar' => $nama_gambar,
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteTim($id)
    {
        $tim = Tim::find($id);
        $tim->delete();
        return back();
    }
}
