<?php

namespace App\Http\Controllers;

use App\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function showTujuan($id)
    {
        $tujuan = Tujuan::find($id);
        return view('frontend.tujuan',compact(['tujuan']));
    }
}
