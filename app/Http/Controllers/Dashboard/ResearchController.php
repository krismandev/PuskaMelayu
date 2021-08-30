<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Research;
use Alert;
use Str;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function getResearch()
    {
        $researchs = Research::orderBy('created_at','desc')->get();
        return view('dashboard.research.research',compact(['researchs']));
    }

    public function createResearch()
    {
        return view('dashboard.research.create');
    }

    public function postResearch(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'abstrak' => 'required',
            'penulis'  => 'required',
            'tahun' =>'required',
            // 'gambar' => 'required|image|mimes:png,jpg,jpeg',
            'file' => 'required|file|mimes:pdf'
        ]);


        if ($request->has('file')) {
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'research';
            $file->move($tujuan_upload,$nama_file);

            $sebelum = '.pdf';
            $sesudah = ['.png'];
            $imageName = Str::replaceArray($sebelum,$sesudah,$nama_file);
            $imagePdf = new \Spatie\PdfToImage\Pdf($tujuan_upload . '/' . $nama_file);
            $imagePdf->saveImage("research/".$imageName);
          }

        $research = Research::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'abstrak' => $request->abstrak,
            'file' => $nama_file,
            'gambar'=> $imageName
        ]);
        Alert::success("Sukses","Berhasil menambah dokumen");
        return redirect()->route('getResearch');
    }

    public function editResearch($id)
    {
        $research = Research::find($id);
        return view('dashboard.research.edit',compact(['research']));
    }

    public function updateResearch(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'abstrak' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'file' => 'file|mimes:pdf'
        ]);

        $research = Research::find($request->research_id);
        if (request()->has('file')) {
            $pdfuploaded = $request->file('file');
            $pdfname = time() . '-' . $pdfuploaded->getClientOriginalName();
            $pdfpath = 'research';
            $pdfuploaded->move($pdfpath, $pdfname);

            $sebelum = '.pdf';
            $sesudah = ['.png'];
            $imageName = Str::replaceArray($sebelum,$sesudah,$pdfname);
            $imagePdf = new \Spatie\PdfToImage\Pdf($pdfpath . '/' . $pdfname);
            $imagePdf->saveImage(public_path("research/".$imageName));
        }else {
            $imageName = $research->gambar;
            $pdfname = $research->file;
        }

        $research->update([
            'judul' => $request->judul,
            'abstrak' => $request->abstrak,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'gambar' => $imageName,
            'file' => $pdfname
        ]);

        return redirect()->route('getResearch');

    }

    public function deleteResearch($id)
    {
        $research = Research::find($id);
        $research->delete();
        return back();
    }



}
