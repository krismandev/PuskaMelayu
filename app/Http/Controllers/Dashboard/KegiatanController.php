<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Webinar;
use App\Seminar;
use App\Survey;
use App\Pelatihan;
use App\Pengabdian;
use Illuminate\Http\Request;
use Alert;
use App\KerjaSama;

class KegiatanController extends Controller
{
    public function getWebinar()
    {
        $webinars = Webinar::orderBy('created_at','desc')->get();
        return view('dashboard.kegiatan.webinar',compact(['webinars']));
    }

    public function postWebinar(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $webinar = Webinar::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        Alert::success('Sukses','Berhasil menambah data');
        return back();
    }

    public function deleteWebinar($id)
    {
        $webinar = Webinar::find($id);
        $webinar->delete();
        return back();
    }

    public function getSeminar()
    {
        $seminars = Seminar::orderBy('created_at','desc')->get();
        return view('dashboard.kegiatan.seminar&conference',compact(['seminars']));
    }

    public function postSeminar(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $seminar = Seminar::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        Alert::success('Sukses','Berhasil menambah data');
        return back();
    }

    public function deleteSeminar($id)
    {
        $seminar = Seminar::find($id);
        $seminar->delete();
        return back();
    }

    public function getPengabdian()
    {
        $pengabdians = Pengabdian::orderBy('created_at','desc')->get();
        return view('dashboard.kegiatan.pengabdian',compact(['pengabdians']));
    }

    public function postPengabdian(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $pengabdian = Pengabdian::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        Alert::success('Sukses','Berhasil menambah data');
        return back();
    }

    public function deletePengabdian($id)
    {
        $pengabdian = Pengabdian::find($id);
        $pengabdian->delete();
        return back();
    }

    public function getSurvey()
    {
        $surveys = Survey::orderBy('created_at','desc')->get();
        return view('dashboard.kegiatan.survey',compact(['surveys']));
    }

    public function postSurvey(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $survey = Survey::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        Alert::success('Sukses','Berhasil menambah data');
        return back();
    }

    public function deleteSurvey($id)
    {
        $survey = Survey::find($id);
        $survey->delete();
        return back();
    }

    public function getPelatihan()
    {
        $pelatihans = Pelatihan::orderBy('created_at')->get();
        return view('dashboard.kegiatan.pelatihan',compact(['pelatihans']));
    }

    public function postPelatihan(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $pelatihan = Pelatihan::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        Alert::success('Sukses','Berhasil menambah data');
        return back();
    }

    public function deletePelatihan($id)
    {
        // dd($id);
        $pelathan = Pelatihan::find($id);
        $pelathan->delete();
        return back();
    }

    public function getKerjaSama()
    {
        $kerjasamas = KerjaSama::orderBy('created_at')->get();
        return view('dashboard.kegiatan.kerjasama',compact(['kerjasamas']));
    }

    public function postKerjaSama(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $kerjasama = KerjaSama::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        Alert::success('Sukses','Berhasil menambah data');
        return back();
    }

    public function deleteKerjaSama($id)
    {
        // dd($id);
        $kerjasama = KerjaSama::find($id);
        $kerjasama->delete();
        return back();
    }
}
