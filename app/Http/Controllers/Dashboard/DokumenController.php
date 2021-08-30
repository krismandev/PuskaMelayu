<?php

namespace App\Http\Controllers\Dashboard;

use App\Dokumen;
use App\Http\Controllers\Controller;
use Org_Heigl\Ghostscript\Ghostscript;
use Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class DokumenController extends Controller
{

    // public function __construct()
    // {
    //     Ghostscript::setGsPath("C:\Program Files\gs\gs9.53.3\bin\gswin64c.exe");
    // }

    public function getDokumen()
    {
        $dokumens = Dokumen::orderBy('nama_dokumen','asc')->get();
        return view('dashboard.dokumen.getDokumen',compact(['dokumens']));
    }

    public function postDokumen(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required',
            'deskripsi' => 'required',
            // 'gambar' => 'required|image|mimes:png,jpg,jpeg',
            'file' => 'required|file|mimes:pdf'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'dokumen';
            $gambar->move($tujuan_upload,$nama_gambar);
        }
        // $file = $request->file('file');
        // $nama_file = time()."_".$file->getClientOriginalName();
        // $tujuan_upload = 'dokumen';
        // $file->move($tujuan_upload,$nama_file);

        if ($request->has('file')) {
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'dokumen';
            $file->move($tujuan_upload,$nama_file);

            $sebelum = '.pdf';
            $sesudah = ['.png'];
            $imageName = Str::replaceArray($sebelum,$sesudah,$nama_file);
            $imagePdf = new \Spatie\PdfToImage\Pdf($tujuan_upload . '/' . $nama_file);
            $imagePdf->saveImage("dokumen/".$imageName);
          }

        $dokumen = Dokumen::create([
            'nama_dokumen' => $request->nama_dokumen,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
            'file' => $nama_file
        ]);
        Alert::success("Sukses","Berhasil menambah dokumen");
        return redirect()->back();
    }

    public function editDokumen($id)
    {
        $dokumen = Dokumen::find($id);
        return view('dashboard.dokumen.editDokumen',compact(['dokumen']));
    }

    public function updateDokumen(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required',
            'deskripsi' => 'required',
            'file' => 'file|mimes:pdf'
        ]);

        $dokumen = Dokumen::find($request->dokumen_id);
        if (request()->has('file')) {
            $pdfuploaded = $request->file('file');
            $pdfname = time() . '-' . $pdfuploaded->getClientOriginalName();
            $pdfpath = 'dokumen';
            $pdfuploaded->move($pdfpath, $pdfname);

            $sebelum = '.pdf';
            $sesudah = ['.png'];
            $imageName = Str::replaceArray($sebelum,$sesudah,$pdfname);
            $imagePdf = new \Spatie\PdfToImage\Pdf($pdfpath . '/' . $pdfname);
            $imagePdf->saveImage(public_path("dokumen/".$imageName));
        }else {
            $imageName = $dokumen->gambar;
            $pdfname = $dokumen->file;
        }

        $dokumen->update([
            'nama_dokumen' => $request->nama_dokumen,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
            'file' => $pdfname
        ]);

        return redirect()->route('getDokumen');

    }

    public function deleteDokumen($id)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->delete();
        return back();
    }
}
