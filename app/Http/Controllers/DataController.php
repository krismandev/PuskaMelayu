<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function dokumen()
    {
        $dokumens = Dokumen::orderBy('created_at','desc')->paginate(9);
        return view('frontend.data.dokumen',compact(['dokumens']));
    }

    public function sosial()
    {
        return view('frontend.pilar.sosial');
    }

    public function ekonomi()
    {
        return view('frontend.pilar.ekonomi');
    }

    public function hukum()
    {
        return view('frontend.pilar.hukum');
    }

    public function lingkungan()
    {
        return view('frontend.pilar.lingkungan');
    }
}
