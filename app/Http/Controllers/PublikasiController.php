<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Jurnal;
use App\Report;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function buku()
    {
        $bukus = Buku::orderBy('created_at','desc')->paginate(9);
        // dd($bukus);
        return view('frontend.publikasi.buku',compact(['bukus']));
    }

    public function jurnal()
    {
        $jurnals = Jurnal::orderBy('created_at','desc')->paginate(9);
        // dd($jurnals);
        return view('frontend.publikasi.jurnal',compact(['jurnals']));
    }

    public function report()
    {
        $reports = Report::orderBy('created_at','desc')->paginate(9);
        // dd($reports);
        return view('frontend.publikasi.report',compact(['reports']));
    }
}
