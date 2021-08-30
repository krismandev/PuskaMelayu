<?php

namespace App\Http\Controllers;

use App\Tentang;
use App\Berita;
use App\Koleksi;
use App\Tujuan;
use App\Profil;
use App\Pilar;
use App\Tim;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $tujuans = Tujuan::orderBy('id','asc')->get();
        $tentang = Tentang::first();
        $beritas = Berita::orderBy('created_at','desc')->paginate(4);
        $pilars = Pilar::orderBy('created_at','asc')->get();
        $koleksis = Koleksi::inRandomOrder()->paginate(6);
        $tims = Tim::orderBy('nama','asc')->get();
        return view('frontend.index',compact(['tentang','beritas','tujuans','pilars','tims','koleksis']));
    }

    public function tentang()
    {
        $tentang = Tentang::first();
        return view('frontend.tentang',compact(['tentang']));
    }

    public function petaKampus()
    {
        return view('frontend.petakampus');
    }

    public function profil()
    {
        $profil = Profil::first();
        return view('frontend.profil',compact(['profil']));
    }

    public function tim()
    {
        $tims = Tim::orderBy('nama','asc')->get();
        return view('frontend.tim',compact(['tims']));
    }


}
