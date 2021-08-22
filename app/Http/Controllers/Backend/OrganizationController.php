<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function view(){
        return view('backend.layouts.organization.view',);
    }

    public function addapitude(){

        return view('backend.layouts.organization.addapitude',);
    }
    public function store(Request $request){

        Question::create([
            'question'=> $request->question
        ]);
        return redirect()->route('organization.addapitude');
    }
    public function addpersonality(){
        return redirect()->route('organization.addpersonality');
    }

    public function addDetails(){
        return view('backend.layouts.organization.addDetails',);
    }
}
