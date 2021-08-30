<?php

namespace App\Http\Controllers\Dashboard;

use App\DestinasiWisata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DestinasiWisataController extends Controller
{
    public function getKotaJambi()
    {
        $kotajambis = DestinasiWisata::where('jenis','kotajambi')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.kotajambi',compact(['kotajambis']));
    }

    public function postKotaJambi(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'kotajambi'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteKotaJambi($id)
    {
        $kotajambi = DestinasiWisata::find($id);
        $kotajambi->delete();
        return back();
    }

    public function getSungaiPenuh()
    {
        $sungaipenuhs = DestinasiWisata::where('jenis','sungaipenuh')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.sungaipenuh',compact(['sungaipenuhs']));
    }

    public function postSungaiPenuh(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'sungaipenuh'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteSungaiPenuh($id)
    {
        $sungaipenuh = DestinasiWisata::find($id);
        $sungaipenuh->delete();
        return back();
    }

    public function getBatanghari()
    {
        $batangharis = DestinasiWisata::where('jenis','batanghari')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.batanghari',compact(['batangharis']));
    }

    public function postBatanghari(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'batanghari'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteBatanghari($id)
    {
        $batanghari = DestinasiWisata::find($id);
        $batanghari->delete();
        return back();
    }

    public function getBungo()
    {
        $bungos = DestinasiWisata::where('jenis','bungo')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.bungo',compact(['bungos']));
    }

    public function postBungo(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'bungo'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteBungo($id)
    {
        $bungo = DestinasiWisata::find($id);
        $bungo->delete();
        return back();
    }

    public function getKerinci()
    {
        $kerincis = DestinasiWisata::where('jenis','kerinci')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.kerinci',compact(['kerincis']));
    }

    public function postKerinci(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'kerinci'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteKerinci($id)
    {
        $kerinci = DestinasiWisata::find($id);
        $kerinci->delete();
        return back();
    }

    public function getMerangin()
    {
        $merangins = DestinasiWisata::where('jenis','merangin')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.merangin',compact(['merangins']));
    }

    public function postMerangin(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'merangin'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteMerangin($id)
    {
        $merangin = DestinasiWisata::find($id);
        $merangin->delete();
        return back();
    }

    public function getMuaroJambi()
    {
        $muarojambis = DestinasiWisata::where('jenis','muarojambi')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.muarojambi',compact(['muarojambis']));
    }

    public function postMuaroJambi(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'muarojambi'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteMuaroJambi($id)
    {
        $muarojambi = DestinasiWisata::find($id);
        $muarojambi->delete();
        return back();
    }

    public function getSarolangun()
    {
        $sarolanguns = DestinasiWisata::where('jenis','sarolangun')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.sarolangun',compact(['sarolanguns']));
    }

    public function postSarolangun(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'sarolangun'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteSarolangun($id)
    {
        $sarolangun = DestinasiWisata::find($id);
        $sarolangun->delete();
        return back();
    }

    public function getTJB()
    {
        $tjbs = DestinasiWisata::where('jenis','tjb')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.tjb',compact(['tjbs']));
    }

    public function postTJB(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'tjb'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteTJB($id)
    {
        $tjb = DestinasiWisata::find($id);
        $tjb->delete();
        return back();
    }

    public function getTJT()
    {
        $tjts = DestinasiWisata::where('jenis','tjt')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.tjt',compact(['tjts']));
    }

    public function postTJT(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'tjt'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteTJT($id)
    {
        $tjt = DestinasiWisata::find($id);
        $tjt->delete();
        return back();
    }

    public function getTebo()
    {
        $tebos = DestinasiWisata::where('jenis','tebo')->orderBy('created_at','desc')->get();
        return view('dashboard.destinasiwisata.tebo',compact(['tebos']));
    }

    public function postTebo(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'destinasi-wisata';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        DestinasiWisata::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'tebo'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteTebo($id)
    {
        $tebo = DestinasiWisata::find($id);
        $tebo->delete();
        return back();
    }



}
