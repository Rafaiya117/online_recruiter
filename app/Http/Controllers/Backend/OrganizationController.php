<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Req_org;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function view(){
        return view('backend.layouts.organization.view',);
    }

    public function add_Ques(){

        return view('backend.layouts.organization.add_Ques',);
    }
    public function store(Request $request){

        Question::create([
            'question'=> $request->question
        ]);
        return redirect()->route('organization.add_Ques');
    }

    public function addDetails(){
        return view('backend.layouts.organization.addDetails',);
    }

}
