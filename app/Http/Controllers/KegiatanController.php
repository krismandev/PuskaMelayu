<?php

namespace App\Http\Controllers;
use App\Galeri;
use App\KerjaSama;
use App\Pelatihan;
use App\Webinar;
use App\Seminar;
use App\Pengabdian;
use App\Survey;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function galeri()
    {
        $galeris = Galeri::orderBy('created_at','desc')->paginate(20);
        return view('frontend.kegiatan.galeri',compact(['galeris']));
    }

    public function webinar()
    {
        $webinars = Webinar::orderBy('created_at','desc')->get();
        return view('frontend.kegiatan.webinar',compact(['webinars']));
    }

    public function seminar()
    {
        $seminars = Seminar::orderBy('created_at','desc')->get();
        return view('frontend.kegiatan.seminar&conference',compact(['seminars']));
    }

    public function pengabdian()
    {
        $pengabdians = Pengabdian::orderBy('created_at','desc')->get();
        return view('frontend.kegiatan.pengabdian',compact(['pengabdians']));
    }

    public function survey()
    {
        $surveys = Survey::orderBy('created_at','desc')->get();
        return view('frontend.kegiatan.survey',compact(['surveys']));
    }

    public function pelatihan()
    {
        $pelatihans = Pelatihan::orderBy('created_at','desc')->get();
        return view('frontend.kegiatan.pelatihan',compact(['pelatihans']));
    }

    public function kerjasama()
    {
        $kerjasamas = KerjaSama::orderBy('created_at','desc');
        return view('frontend.kegiatan.kerjasama',compact(['kerjasamas']));
    }
}
