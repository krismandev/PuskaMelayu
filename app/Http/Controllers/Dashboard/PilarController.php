<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Pilar;
use Illuminate\Http\Request;

class PilarController extends Controller
{
    public function getPilar()
    {
        $pilars = Pilar::orderBy('created_at','asc')->get();
        return view('dashboard.pilar',compact(['pilars']));
    }

    public function postPilar(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required',
            'file' => 'required|file|mimes:pdf'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'pilar';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        if (request()->has('file')) {
            $pdfuploaded = $request->file('file');
            $pdfname = time() . '-' . $pdfuploaded->getClientOriginalName();
            $pdfpath = 'pilar';
            $pdfuploaded->move($pdfpath, $pdfname);
        }

        $pilar = Pilar::create([
            'nama' => $request->nama,
            'gambar' => $nama_gambar,
            'file' => $pdfname
        ]);

        return back();

    }

    public function deletePilar($id)
    {
        $pilar = Pilar::find($id);
        $pilar->delete();
        return back();
    }
}
