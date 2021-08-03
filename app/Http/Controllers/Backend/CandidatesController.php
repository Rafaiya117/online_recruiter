<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function personal(){
        return view('backend.layouts.candidates.personal',);
    }
    public function passed(){
        return view('backend.layouts.candidates.passed',);
    }
    public function failed(){
        return view('backend.layouts.candidates.failed',);
    }
    public function selected(){
        return view('backend.layouts.candidates.selected',);
    }
    public function resume(){
        return view('backend.layouts.candidates.resume',);
    }
}
