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
        $questions = Question::paginate(10);
        return view('backend.layouts.organization.addapitude',compact('questions'));
    }
    public function store(Request $request){

        Question::create([
            'question'=> $request->question
        ]);
        return redirect()->back('addapitude');
    }
    public function addpersonality(){
        return view('backend.layouts.organization.addpersonality',);
    }
    public function addDetails(){
        return view('backend.layouts.organization.addDetails',);
    }
}
