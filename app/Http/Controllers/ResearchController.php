<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function research()
    {
        $researchs = Research::orderBy('created_at','desc')->paginate(10);
        return view('frontend.research.research',compact(['researchs']));
    }

    public function detailResearch($id)
    {
        $research = Research::find($id);
        return view('frontend.research.detailResearch',compact(['research']));
    }
}
