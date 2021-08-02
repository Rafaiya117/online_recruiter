<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function job(){
        return view('backend.layouts.details.job',);
    }
    public function organization(){
        return view('backend.layouts.details.organization',);
    }
    public function requirement(){
        return view('backend.layouts.details.requirement',);
    }

}
