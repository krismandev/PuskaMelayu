<?php

namespace App\Http\Controllers;

use App\DestinasiWisata;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    public function destinasiWisata($slug)
    {
        $destinasis = DestinasiWisata::where('jenis',$slug)->orderBy('created_at')->paginate(15);
        $title = '';
        switch ($slug) {
            case 'kotajambi':
                $title = "Kota Jambi";
                break;
            case 'muarojambi':
                $title = "Muaro Jambi";
                break;
            case 'sungaipenuh':
                $title = "Kota Sungai Penuh";
                break;
            case 'batanghari':
                $title = "Kabupaten Batanghari";
                break;
            case 'bungo':
                $title = "Kabupaten Bungo";
                break;
            case 'kerinci':
                $title = "Kabupaten Kerinci";
                break;
            case 'merangin':
                $title = "Kabupaten Merangin";
                break;
            case 'sarolangun':
                $title = "Kabupaten sarolangun";
                break;
            case 'tjb':
                $title = "Kabupaten Tanjung Jabung Barat";
                break;
            case 'tjt':
                $title = "Kabupaten Tanjung Jabung Timur";
                break;
            case 'tebo':
                $title = "Kabupaten Tebo";
                break;
            default:
                $title = 'Kota';
                break;
        }
        return view('frontend.destinasiwisata',compact(['destinasis','title']));
    }
}
