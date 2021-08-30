<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tentang;
use Alert;
use App\Profil;
use App\Tujuan;
use App\TujuanTentang;
use App\VisiMisi;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function getTentang()
    {
        $tentang = Tentang::first();
        return view('dashboard.tentang',compact(['tentang']));
    }

    public function postTentang(Request $request)
    {
        $request->validate([
            'tentang'=>'required'
            // 'gambar'=>'required'
        ]);

        // dd($request->gambar);

        $tentang = Tentang::first();

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'images';
            $gambar->move($tujuan_upload,$nama_gambar);
        }else{
            $nama_gambar = $tentang->gambar;
        }



        if ($tentang != null) {
            $tentang->update([
                'tentang'=> $request->tentang,
                'gambar'=> $nama_gambar
            ]);
        }else {
            Tentang::create([
                'tentang'=>$request->tentang,
                'gambar' => $nama_gambar
            ]);
        }

        Alert::success('success','Berhasil memperbarui data');
        return back();
    }

    public function getProfil()
    {
        $profil = Profil::first();
        return view('dashboard.profil-sdgs',compact(['profil']));
    }

    public function postProfil(Request $request)
    {
        $request->validate([
            'content'=>'required'
            // 'gambar'=>'required'
        ]);

        $profil = Profil::first();

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'images';
            $gambar->move($tujuan_upload,$nama_gambar);
        }else{
            $nama_gambar = $profil->gambar;
        }



        if ($profil != null) {
            $profil->update([
                'content'=> $request->content,
                'gambar'=> $nama_gambar
            ]);
        }else {
            Profil::create([
                'content'=>$request->content,
                'gambar' => $nama_gambar
            ]);
        }

        Alert::success('success','Berhasil memperbarui data');
        return back();
    }

    public function getVisiMisi()
    {
        $visimisi  = VisiMisi::first();
        return view('dashboard.tentang.visi-misi',compact(['visimisi']));
    }

    public function postVisiMisi(Request $request)
    {
        $request->validate([
            'visi'=>'required',
            'misi' => 'required'
            // 'gambar'=>'required'
        ]);

        // dd($request->gambar);

        $visimisi = VisiMisi::first();


        if ($visimisi != null) {
            $visimisi->update([
                'visi'=> $request->visi,
                'misi'=> $request->misi,
            ]);
        }else {
            VisiMisi::create([
                'visi'=> $request->visi,
                'misi'=> $request->misi,
            ]);
        }

        Alert::success('success','Berhasil memperbarui data');
        return back();
    }

    public function getTujuanTentang()
    {
        $tujuan = TujuanTentang::first();
        return view('dashboard.tentang.tujuan',compact(['tujuan']));
    }

    public function postTujuanTentang(Request $request)
    {
        $request->validate([
            'tujuan'=>'required',
        ]);

        // dd($request->gambar);

        $tujuan = TujuanTentang::first();


        if ($tujuan != null) {
            $tujuan->update([
                'tujuan'=> $request->tujuan,
            ]);
        }else {
            TujuanTentang::create([
                'tujuan'=> $request->tujuan,
            ]);
        }

        Alert::success('success','Berhasil memperbarui data');
        return back();
    }
}
