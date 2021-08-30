<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Koleksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KoleksiController extends Controller
{

    public $pesan_delete = ['success'=>'Berhasil Menghapus data'];
    public $pesan_create = ['success'=> 'Berhasil menambahkan data'];
    public $pesan_update = ['success' => 'Berhasil mengupdate data'];

    public function getEtnografi()
    {
        $etnografis = Koleksi::where('jenis','etnografi')->orderBy('created_at','desc')->get();
        return view('dashboard.koleksi.etnografi',compact(['etnografis']));
    }

    public function postEtnografi(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'koleksi';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Koleksi::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'etnografi'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteEtnografi($id)
    {
        $etnografi = Koleksi::find($id);
        $etnografi->delete();
        return back();
    }

    public function getGeografi()
    {
        $geografis = Koleksi::where('jenis','geografi')->orderBy('created_at','desc')->get();
        return view('dashboard.koleksi.geografi',compact(['geografis']));
    }

    public function postGeografi(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'koleksi';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Koleksi::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'geografi'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteGeografi($id)
    {
        $geografi = Koleksi::find($id);
        $geografi->delete();
        return back();
    }

    public function getFilologi()
    {
        $filologis = Koleksi::where('jenis','filologi')->orderBy('created_at','desc')->get();
        return view('dashboard.koleksi.filologi',compact(['filologis']));
    }

    public function postFilologi(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'koleksi';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Koleksi::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'filologi'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteFilologi($id)
    {
        $filologi = Koleksi::find($id);
        $filologi->delete();
        return back();
    }

    public function getCagarBudaya()
    {
        $cagarbudayas = Koleksi::where('jenis','cagarbudaya')->orderBy('created_at','desc')->get();
        return view('dashboard.koleksi.cagarbudaya',compact(['cagarbudayas']));
    }

    public function postCagarBudaya(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'koleksi';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Koleksi::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'cagarbudaya'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteCagarBudaya($id)
    {
        $cagarbudaya = Koleksi::find($id);
        $cagarbudaya->delete();
        return back();
    }

    public function getSejarah()
    {
        $sejarahs = Koleksi::where('jenis','sejarah')->orderBy('created_at','desc')->get();
        return view('dashboard.koleksi.sejarah',compact(['sejarahs']));
    }

    public function postSejarah(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:png,jpg'
        ]);

        if($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'koleksi';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        Koleksi::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
            'jenis' => 'sejarah'
        ]);

        Alert::success("Sukses","Berhasil menambah data");

        return back();
    }

    public function deleteSejarah($id)
    {
        $sejarah = Koleksi::find($id);
        $sejarah->delete();
        return back();
    }
}
