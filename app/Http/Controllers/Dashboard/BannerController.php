<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Banner;
use Alert;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function getBanner()
    {
        $banners = Banner::orderBy('created_at','desc')->get();
        return view('dashboard.banner',compact(['banners']));
    }

    public function postBanner(Request $request)
    {
        $request->validate([
            'gambar'=>'required|image|mimes:png,jpg'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'banner';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Banner::create([
            'gambar'=>$nama_gambar
        ]);
        Alert::success("Sukses","Berhasil menambah data");
        return back();
    }

    public function deleteBanner($id)
    {
        $Banner = Banner::find($id);
        $Banner->delete();
        return back();
    }
}
