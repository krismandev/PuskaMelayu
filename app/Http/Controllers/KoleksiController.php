<?php

namespace App\Http\Controllers;

use App\Koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function koleksi($slug)
    {
        $koleksis = Koleksi::where('jenis',$slug)->orderBy('created_at','desc')->paginate(15);
        $title = '';

        switch ($slug) {
            case 'etnografi':
                $title = "Etnografi";
                break;
            case 'geografi':
                $title = "Geografi";
                break;
            case 'filologi':
                $title = "Filologi";
                break;
            case 'cagarbudaya':
                $title = "Cagar Budaya";
                break;
            case 'sejarah':
                $title = "Sejarah";
                break;
            default:
                $title = 'Kota';
                break;
        }
        return view('frontend.koleksi',compact(['koleksis','title']));
    }
}
