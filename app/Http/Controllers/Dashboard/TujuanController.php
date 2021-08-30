<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tujuan;
use Alert;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function getTujuan()
    {
        $tujuans = Tujuan::orderBy('id','asc')->get();
        return view('dashboard.tujuan.getTujuan',compact(['tujuans']));
    }

    public function editTujuan($id)
    {
        $tujuan = Tujuan::find($id);
        return view('dashboard.tujuan.editTujuan',compact(['tujuan']));
    }

    public function updateTujuan(Request $request)
    {

        $request->validate([
            'gambar'=>'image|mimes:png,jpg',
            'deskripsi'=>'required'
        ]);

        $tujuan = Tujuan::find($request->tujuan_id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'images';
            $gambar->move($tujuan_upload,$nama_gambar);
        }else {
            $nama_gambar = $tujuan->gambar;
        }


        $tujuan->update([
            'deskripsi' => $request->deskripsi,
            'target' => $request->target,
            'gambar' => $nama_gambar,
        ]);

        Alert::success('Sukses','Berhasil mengupdate tujuan');
        return back();
    }
}
