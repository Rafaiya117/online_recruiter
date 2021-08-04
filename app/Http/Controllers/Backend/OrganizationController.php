<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function view(){
        return view('backend.layouts.organization.view',);
    }

    public function addapitude(){
        return view('backend.layouts.organization.addapitude',);
    }
    public function addpersonality(){
        return view('backend.layouts.organization.addpersonality',);
    }
}
